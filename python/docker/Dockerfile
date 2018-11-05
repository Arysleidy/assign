from python:2.7-alpine3.8

run pip install flask==0.10.1 html5lib==1.0b10 Jinja2==2.10 six==1.10.0

copy . /app

volume ["/app"]

workdir /app
run mkdir -p logs

CMD ["python", "app.py"]

