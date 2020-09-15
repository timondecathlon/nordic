<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Страница О нас</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <script src="https://api-maps.yandex.ru/2.1/?apikey=c15cd479-89d0-4f13-bfad-5b93b2506f19&lang=ru_RU" type="text/javascript">
        </script>

        <script type="text/javascript">
            ymaps.ready(init);

            function init(){
                var myMap = new ymaps.Map("map", {
                    center: [55.77, 37.65], 
                    zoom: 5  
                });

                let points = JSON.parse(getShops());
                for (let i = 0; i < points.length;i++) {                   
                    // Создание метки 
                    let myPlacemark = new ymaps.Placemark(
                        [points[i].latitude, points[i].longitude],
                        {
                            hintContent: points[i].title,  
                            balloonContent: '<b>'+points[i].title+'</b><div>'+points[i].address+'</div><div>'+points[i].description+'</div><div><img src="'+points[i].photo+'"/></div>'    
                        }            
                    );
                    // Добавление метки на карту
                    myMap.geoObjects.add(myPlacemark);   
                }  
           
            }

           

            function getShops() {
                //создаем новый экземпляр класса для запросов
                let xhr = new XMLHttpRequest();

                let url = 'http://localhost/eshop/api/1.0/shops/get/all/index.php';
               
                //запустили метод open() для установки параметров запроса
                xhr.open('GET',url,false);
                xhr.send();
                return xhr.responseText;
            }

        </script>

        
    </head>

    <body>
        <div id="map" style="width: 600px; height: 400px"></div>
        Данные которые были введены во второй версии файла бла бла бла
        Строка текста созданная в третье версии
        4 строка для 4 коммита
        ипррородвпварпрарара
    </body>

</html>