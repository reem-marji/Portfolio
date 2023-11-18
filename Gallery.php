<?php include('header.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    body {
      background-color: #f0fbf4;
      margin: 0;
      padding: 0;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    }

    .photo-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 65vh;
      flex-wrap: wrap;
      }

    .photo {
        width: 370px;
        height: 370px;
        margin: 25px;
        cursor: pointer;
        overflow: hidden;
        border-radius: 1.5%;
        background-color: #fff;
        position: relative;
        transition: transform 0.3s ease;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    }

    .photo:hover {
        transform: scale(1.1);
    }

    .photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .enlarged-photo {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.8);
        z-index: 2;
        align-items: center;
        justify-content: center;
    }

      .enlarged-photo img {
          max-width: 80%;
          max-height: 80%;
      }

      .close-button {
        position: absolute;
        top: 10px;
        right: 10px;
        color: #fff;
        font-size: 24px;
        cursor: pointer;
    }

      .description{
        color: #3ba576;
        font-family: "Tahoma";
        letter-spacing: 1px;
        font-size: 18px;
        text-align: center;
        margin-top: 50px;
        line-height: 1.5;
      }


  </style>
  <title>Gallery Page</title>
</head>

<body>

<p class="description">Lebanese culture and heritage, intricately woven into the fabric of its architecture, stand as a testament<br>to the rich tapestry of history, resilience, and enduring spirit of the Lebanese people.</p>

<div class="photo-container" id="photo-container"></div>

    <div class="enlarged-photo" id="enlarged-photo">
        <span class="close-button" onclick="hideEnlarged()">&times;</span>
        <img id="enlarged-img" src="" alt="Enlarged Image">
    </div>

    <script>
        fetch('gallery.json')
            .then(response => response.json())
            .then(data => {
                const photoContainer = document.getElementById('photo-container');

                data.images.forEach(image => {
                    const photoDiv = document.createElement('div');
                    photoDiv.className = 'photo';

                    const img = document.createElement('img');
                    img.src = image;
                    img.alt = 'Img ' + (data.images.indexOf(image) + 1);

                    img.setAttribute('onclick', 'showEnlarged("' + image + '")');

                    photoDiv.appendChild(img);

                    photoContainer.appendChild(photoDiv);
                });
            })
            .catch(error => {
                console.error('Error loading gallery data:', error);
            });

        function showEnlarged(imageSrc) {
            const enlargedPhoto = document.getElementById("enlarged-photo");
            const enlargedImg = document.getElementById("enlarged-img");

            enlargedImg.src = imageSrc;
            enlargedPhoto.style.display = "flex";
        }

        function hideEnlarged() {
            const enlargedPhoto = document.getElementById("enlarged-photo");
            enlargedPhoto.style.display = "none";
        }
    </script>
</body>
</html>
