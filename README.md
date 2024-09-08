# OpenTelemetry Workshop

## 系統需求

大多都使用 Docker 包裝好了。只需要準備好兩個東西：

- Docker
- Docker Compose

## 啟動服務

    docker compose up -d

下面是啟動的服務：

| 服務                                                                   | 傳送門                          |
|----------------------------------------------------------------------|------------------------------|
| [Laravel](https://jetstream.laravel.com/)                            | http://127.0.0.0:8000/       |
| [PostgreSQL](https://www.postgresql.org/)                            | postgresql://localhost:5432/ |
| [Hydra](https://github.com/ory/hydra)                                | http://127.0.0.0:4444/       |
|                                                                      | http://127.0.0.0:4445/       |
|                                                                      | http://127.0.0.0:4446/       |
| [Collector](https://opentelemetry.io/docs/collector/)                | Docker Internal              |
| [Prometheus](https://prometheus.io/)                                 | http://127.0.0.1:9090/       |
| [cAdvisor](https://github.com/google/cadvisor)                       | Docker Internal              |
| [Grafana](https://grafana.com/)                                      | http://127.0.0.1:3000/       |
| [Loki](https://grafana.com/oss/loki/)                                | Docker Internal              |
| [Tempo](https://grafana.com/oss/tempo/)                              | Docker Internal              |
| [Pyroscope](https://grafana.com/oss/pyroscope/)                      | Docker Internal              |
| [Promtail](https://grafana.com/docs/loki/latest/send-data/promtail/) | Docker Internal              |

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
