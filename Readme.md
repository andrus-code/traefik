# Traefik on VPS

Traefik is a modern, open-source reverse proxy and load balancer designed to manage and route HTTP and HTTPS traffic to different services within your infrastructure. It's particularly useful in microservices environments, where dynamic and rapidly changing configurations are common. Traefik automatically discovers services and handles the routing to them, making it a powerful tool for managing web traffic in containers or distributed systems.

![arquitectura_traefik](./img/traefik-architecture.png)


Characteristics of Traefik:

### 1. Reverse Proxy
A reverse proxy sits between clients (users) and your backend servers (services). It intercepts requests from the client and forwards them to the appropriate server.

**Example:** When a user tries to access `http://example.com`, the reverse proxy (Traefik) decides which backend service should handle the request, based on routing rules you configure.

---

### 2. Load Balancer
Traefik can balance the load of traffic across multiple instances of your backend services. If one instance goes down, it will automatically route traffic to healthy instances.

**Example:** If you have two instances of a web application (e.g., `web1` and `web2`), Traefik will distribute incoming traffic between them, ensuring both servers get a fair share of the load.

---

### 3. Dynamic Configuration
One of Traefik’s key features is its ability to auto-discover services as they come and go. It automatically detects new containers or services based on labels or annotations, without requiring manual configuration.

**Example:** If you start a new Docker container, Traefik will automatically recognize it and start routing traffic to it based on predefined rules.

---

### 4. SSL/TLS Termination
Traefik can automatically manage SSL/TLS certificates for your services. It can handle the encryption/decryption process (SSL termination), making your setup easier and more secure. Traefik can also automatically obtain and renew SSL certificates from Let's Encrypt, a free Certificate Authority.

**Example:** Traefik can automatically issue a Let's Encrypt SSL certificate for your service, so traffic to `https://example.com` is encrypted.

---

### 5. Integrates with Modern Tools and Ecosystems
Traefik is designed to work seamlessly with Docker, Kubernetes, and Consul, as well as other container orchestrators or service discovery tools.

**Example:** In a Docker environment, Traefik can listen for newly started containers and automatically route traffic to them based on container labels.

---

### 6. Dashboard and Monitoring
Traefik provides a built-in web dashboard that allows you to monitor the health of your services and view routing information in real time.

**Example:** You can visit the Traefik dashboard at `http://localhost:8080` (by default) to see which services are currently running, how traffic is routed, and whether any services are unhealthy.

---

### 7. Middleware Support
Traefik supports middleware, which allows you to apply various transformations to your HTTP requests, such as authentication, rate-limiting, redirecting, or modifying headers.

**Example:** You can configure Traefik to apply basic authentication to certain routes or limit how many requests a user can make within a given time frame.




# Hands on

```bash
  docker-compose -f docker-compose.yml up -d
```

```bash
   From browser:  http://localhost/

   404 Page Not Found
```

 What happens ?
 


