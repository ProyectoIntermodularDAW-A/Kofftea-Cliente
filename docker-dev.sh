#!/bin/bash
# --------------------------------------------------
# Script de utilidad para manejar Docker Compose
# Proyecto: Kofftea-Cliente
# --------------------------------------------------

case "$1" in
  build)
    echo "🧱 Construyendo y levantando contenedores..."
    docker compose up --build
    ;;
  
  up)
    echo "🚀 Levantando contenedores..."
    docker compose up -d
    ;;
  
  down)
    echo "🛑 Deteniendo y eliminando contenedores..."
    docker compose down
    ;;
  
  logs)
    echo "📜 Mostrando logs..."
    docker compose logs -f
    ;;
  
  bash)
    echo "💻 Abriendo bash dentro del contenedor..."
    docker exec -it servidor_php bash
    ;;
  
  clean)
    echo "🧼 Limpiando contenedores e imágenes..."
    docker compose down --rmi all
    ;;
  
  *)
    echo "Uso: ./docker-dev.sh {build|up|down|logs|bash|clean}"
    ;;
esac
