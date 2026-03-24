FROM php:8.2-cli

# Set working directory
WORKDIR /app

# Copy files
COPY . .

# Start PHP built-in server
CMD php -S 0.0.0.0:10000
