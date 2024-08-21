# A Simple Web Shell

## how to start

1. Clone this repository

```bash
git clone https://github.com/oodenough/web-shell
```

2. Switch directory

```bash
cd web-shell
```

3. Start the service

```bash
docker compose up --detach
```

4. Optional: Forward the port (*if you are running on your server*)

```bash
ssh -L 8080:localhost:8080 -C -N -l username ip_addr
```

5. Visit `localhost:8080` in your browser
6. Run `ls` command in web shell

![Screenshot 2024-08-21 at 11.14.56 PM](https://i.imgur.com/nz1eKXf.png)

## how to remove

Stop and Clean all *containers* and *images*

```bash
docker compose down --rmi all
```

