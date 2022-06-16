<style type="text/css">
.news {
  margin-bottom: 32px;
  font-size: 12px;
  line-height: 16px;
}
.card {
  display: flex;
  margin-bottom: 10px;
  padding: 16px 20px;
  background-color: #ffffff;
  box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);
}

.card h3 {
  margin: 0;
  margin-bottom: 4px;
  padding: 0;
  font-weight: bold;
  font-size: 14px;
  line-height: 20px;
}

.card img {
  width: 56px;
  height: 56px;
  margin-right: 20px;
}

.card p {
  margin: 0;
  margin-bottom: 8px;
  padding: 0;
}

.news time {
  color: #691207;
</style>

<section class="news container">
  <h2>Самые популярные статьи!</h2>
  <br>
  <article class="card">
    <!-- Статья №1 -->
    <img src="static/img/Python.svg" alt="Питон">
    <div class="card-content">
      <a href="index.php?page=python_calc"><h3>Калькулятор на Python</h3></a>
      <p>Его можно сделать за 5 минут!</p>
      <time datetime="2021-1-10">10 января 2021</time>
    </div>
  </article>
  <!-- Статья №2 -->
  <article class="card">
    <img src="static/img/3486634.svg" alt="Школьник">
    <div class="card-content">
      <a href="index.php?page=lx&page_id=1"><h3>Лайфхаки для школы</h3></a>
      <time datetime="2021-05-06">6 мая 2021</time>
    </div>
  </article>
  <!-- Статья №3 -->
  <article class="card">
    <img src="static/img/YP.png" alt="Яндекс Практикум">
    <div class="card-content">
      <a href='index.php?page=prog'><h3>Почти прошел курс Яндекс Практикума</h3></a>
      <p>Моя история!</p>
      <time datetime="2021-05-04">4 мая 2021</time>
    </article>
    <!-- Статья №4 -->
  <article class="card">
    <img src="static/img/html.png" alt="HTML">
    <div class="card-content">
      <a href='index.php?page=page1'><h3>Моя история разработки в HTML сфере</h3></a>
      <p>Html разработка</p>
      <time datetime="2022-05-03">3 мая 2022</time>
    </div>
  </article>
    </div>
  </article>
</section>

