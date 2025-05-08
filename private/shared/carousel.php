<!DOCTYPE html>
<html lang="en">
<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                
                <img src="../../public/images/2023_05_15_img_2902.jpg" class="d-block w-100" alt="nun">
            </div>
            <div class="carousel-item">
                <img src="../../public/images/i2.jpg" class="d-block w-100" alt="nun">
            </div>
            <div class="carousel-item">
                <img src="../../public/images/i3.jpg" class="d-block w-100" alt="nun">
            </div>
            <div class="carousel-item">
                <img src="../../public/images/i4.jpg" class="d-block w-100" alt="nun">
            </div>
            <div class="carousel-item">
                <img src="../../public/images/image1.jpg" class="d-block w-100" alt="nun">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="carousel">
    <div class="carousel-inner">
        <div id="slide1" class="carousel-item">
            <img src="../../public/images/image1.jpg" alt="Image 1">
        </div>
        <div id="slide2" class="carousel-item">
            <img src="../../public/images/image2.jpg" alt="Image 2">
        </div>
        <div id="slide3" class="carousel-item">
            <img src="../../public/images/image3.jpg" alt="Image 3">
        </div>
        <div id="slide4" class="carousel-item">
            <img src="../../public/images/image4.jpg" alt="Image 4">
        </div>
        <div id="slide5" class="carousel-item">
            <img src="../../public/images/image5.jpg" alt="Image 5">
        </div>
    </div>
    <a href="#slide5" class="carousel-control prev">&#10094;</a>
    <a href="#slide2" class="carousel-control next">&#10095;</a>
    <div class="progress-bars">
        <a href="#slide1" class="progress-bar"></a>
        <a href="#slide2" class="progress-bar"></a>
        <a href="#slide3" class="progress-bar"></a>
        <a href="#slide4" class="progress-bar"></a>
        <a href="#slide5" class="progress-bar"></a>
    </div>
</div>
<style>
    .carousel {
        position: relative;
        max-width: 6000px;
        max-height: 1000px;
        margin: 0 auto;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .carousel-inner {
        display: flex;
        transition: transform 0.5s ease-in-out;
        width: 500%;
    }

    .carousel-item {
    width: 1600px; /* Fixed width for each carousel item */
    height: 1000px; /* Fixed height for each carousel item */
    box-sizing: border-box;
    flex-shrink: 0;
    overflow: hidden; /* Ensure the image doesn't overflow the container */
}

.carousel-item img {
    width: 100%; /* Make the image fill the width of the container */
    height: 100%; /* Make the image fill the height of the container */
    display: block;
    border-radius: 10px;
    object-fit: cover; /* Ensure the image covers the entire container */
    object-position: center; /* Center the image within the container */
}
    .carousel-control {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        padding: 10px;
        cursor: pointer;
        font-size: 24px;
        border-radius: 50%;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .carousel-control:hover {
        background-color: #fff;
    }
</style>