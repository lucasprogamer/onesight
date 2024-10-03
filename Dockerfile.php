# Dockerfile.submodule
FROM alpine:3.12

# Instala o Git
RUN apk add --no-cache git

# Define o diretório de trabalho
WORKDIR /var/www/html

# Copia os arquivos do repositório
COPY . .

# Inicializa e atualiza os submódulos
RUN git submodule init && git submodule update --recursive

# Para evitar que ele falhe se os diretórios já existirem
# use 'git clone' em vez de 'git submodule update'
RUN if [ ! -d "frontend" ]; then git clone https://github.com/lucasprogamer/onesight-frontend.git; fi
RUN if [ ! -d "backend" ]; then git clone https://github.com/lucasprogamer/onesight-backend.git; fi
