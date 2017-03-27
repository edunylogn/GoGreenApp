import React from 'react';
const img1 = require('../../../img/carousel_1.jpg');
const img2 = require('../../../img/carousel_2.jpg');
const img3 = require('../../../img/carousel_3.jpg');
const img4 = require('../../../img/carousel_4.jpg');
const img5 = require('../../../img/carousel_5.jpg');
const Images = [img1, img2, img3, img4, img5];
const CarouselImages = Images.map((img, index) =>
    <div className={index == 0? 'item active' : 'item'} key={index}>
        <img className="img-responsive img-full" src={img} alt=""/>
    </div>
);
const Indicators = (
    <ol className="carousel-indicators">
        {Images.map((img, index) =>
            <li data-target="#myCarousel" data-slide-to={index} key={index} className={index == 0? 'active' : ''}></li>
        )}
    </ol>
);
const Carousel = () => (
    <div id="myCarousel" className="carousel slide">
        {Indicators}
        <div className="carousel-inner">
            {CarouselImages}
        </div>
        <a className="left carousel-control" href="#myCarousel" data-slide="prev">
            <span className="icon-prev"></span>
        </a>
        <a className="right carousel-control" href="#myCarousel" data-slide="next">
            <span className="icon-next"></span>
        </a>
    </div>
);
export default Carousel;