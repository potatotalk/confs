
```sh
pip install fastapi
pip install "uvicorn[standard]"
```

main.py 
```python
from typing import Union

from fastapi import FastAPI

app = FastAPI()

@app.get("/")
def read_root():
    return {"Hello": "World"}

@app.get("/items/{item_id}")
def read_item(item_id: int, q: Union[str, None] = None):
    return {"item_id": item_id, "q": q}
```

or async
```py 
from typing import Union

from fastapi import FastAPI

app = FastAPI()


@app.get("/")
async def read_root():
    return {"Hello": "World"}


@app.get("/items/{item_id}")
async def read_item(item_id: int, q: Union[str, None] = None):
    return {"item_id": item_id, "q": q}

```

```sh
uvicorn main:app --reload

# main: 파일 main.py(파이썬 "모듈").
# appmain.py: line 내부에 생성된 객체 app = FastAPI().
# --reload: 코드 변경 후 서버를 다시 시작합니다. 개발용으로만 하십시오.


# test
# http://127.0.0.1:8000/items/5?q=somequery .

```
