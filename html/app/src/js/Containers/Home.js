import React                from 'react';
import Carousel             from '../Components/Presentation/Carousel';
import Login                from '../Components/Views/Login'

import '../../styles/_home.scss';
import homeImg1             from '../../img/home_img_1.jpg';
import homeImg2             from '../../img/home_img_2.jpg';
import homeImg3             from '../../img/home_img_3.jpg';

const Home = () => (
    <div className="page-wrapper">
        <div className="splash">
            <div className="container">
                <div className="row">
                    <div className="col-md-7">
                        <Carousel/>
                    </div>
                    <div className="col-md-5">
                        <div className="well user-space">
                            <Login/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div className="container">
            <hr/>
            <div className="row">
                <div className="col-lg-12">
                    <div className="well well-sm text-center">
                        <a href="">Request</a> a travel agency quote and desing your itinerary.
                    </div>
                </div>
            </div>
        </div>
        <div className="home-about">
            <div className="container">
                <div className="row">
                    <div className="col-lg-12 text-center">
                        <h2>Why to choose Costa Rica for your vacations?</h2>
                        <hr/>
                    </div>
                </div>
                <div className="row">
                    <div className="col-lg-4 col-lg-offset-2">
                        <p>You may be wondering, “<strong>Why travel to Costa Rica to spend my vacation?</strong>” That is a valid question, and the answer is quite simple: because it’s the best place to go! You can find everything you need! Some nice rentals, all inclusive packages, travel guides (who speak English, of course), and every other traveling need you may have. Costa Rica is definitely your best option for traveling! There’s no doubt about it.</p>
                        <p>You can check the<a href="http://www.epinions.com/reviews/trvl-Dest-Latin_America-Costa_Rica?sb=1" target="_blank"> reviews </a>about this country, and you will see that there is no better. For one thing, the Costa Ricans (or “ticos”, as they call themselves) are very friendly people, and they are known for helping people who need a helping hand. You will not have any problems if you plan on taking your family to this country to enjoy the vacation. The ticos will not give you a hard time.<br/><br/>If you have <strong>kids</strong>, they will have a great time, and maybe they will even make a few <strong>friends who can become pen pals</strong>. Then again, if you’re single, you won’t have to worry about walking around alone either.</p>
                        <p>The <a href="http://www.costaricatravelandvacations.com/cat-hotels/all_inclusive/"><strong>all inclusive packages</strong></a> you can find in Costa Rica are wonderful. If you want to get the most out of your vacation, you really should stay at an <a href="http://www.costaricatravelandvacations.com/cat-hotels/all_inclusive/">all inclusive hotel</a> so that you can go out on any type of adventure or any other kind of trip you want, and then, at the end of the day, you can get back to your room and just enjoy all the comforts that these <a href="http://www.costaricatravelandvacations.com/cat-hotels/luxury/">luxury hotels</a> have to offer.</p>
                    </div>
                    <div className="col-lg-4">
                        <p>It shouldn’t be hard for you to find a good<a href="http://www.costaricatravelandvacations.com"> costa rica travel guide</a>. There are many people who speak English in Costa Rica, and they will be able to help you find the perfect spot to visit. That way, you will not have to worry about going to the wrong places which you will not enjoy, and in the process wasting time and money. It is always good to go with somebody who knows where s/he is going.</p>
                        <p>All in all, if you want to travel, Costa Rica is your best option for any type of vacation. You will get nothing but <strong>the best</strong>. All of your vacation needs will be met in this wonderful country.</p>
                        <p>Our more than 15 years experience create the perfect combination between the best value vs price  for a pleasant <em>trip to Costa Rica</em>.<br/>Explore the country with exciting <a href="http://www.costaricatravelandvacations.com/cat-adventure-package/">vacation packages</a> from Go Green C. R. your <a href="http://www.costaricatravelandvacations.com/">travel agency</a> in Costa Rica. From our page <a href="http://www.costaricatravelandvacations.com">www.costaricatravelandvacations.com</a> we want you to begin seeing the beauty of Costa Rica with our amazing <a href="http://www.costaricatravelandvacations.com/cate-package/2/">vacation packages</a>.</p>
                        <p> From the beginning with us, we will make sure you go at the best places to stay. Our professional team always looks for your safety agency will be there for you 24/7 to ensure your trip goes just as planned no matter the occasion: Weddings, Honeymoons, Family Vacation, Couples Retreat, <a href="http://www.costaricatravelandvacations.com/cate-tours/3/">tours</a>, self drive, rent a car, local flights, private transportation, <a href="http://www.costaricatravelandvacations.com/cat-hotels/luxury/">luxury hotels</a>, etc. <br/>We look forward to your request!.</p>
                    </div>
                    <div className="col-lg-8 col-lg-offset-2 text-center">
                        <a href="#" className="btn btn-lg btn-success">
                            <i className="fa fa-bed"></i> Find Hotels
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div className="container-fluid content-articles">
            <div className="container">
                <div className="row">
                    <div className="col-sm-3">
                        <h2>Traveling to Costa Rica</h2>
                        <p>Welcome to <a href="http://www.costaricatravelandvacations.com/">Costa Rica Travel and Vacations</a>, the main spot to get information, <a href="http://www.costaricatravelandvacations.com/cate-package/2/">packages</a> and reserves for tourist in Costa Rica.</p>
                        <p>This site is supported by one of the most experienced (since 1996) companies in tourist management: <a href="http://www.costaricatravelandvacations.com/10/about-us.html">Go Green Costa Rica.</a></p>
                        <p>Please browse this site and feel free to <a href="http://www.costaricatravelandvacations.com/1/contact-us.html">contact us/reserve</a> for any service you need. </p>
                    </div>
                    <div className="col-sm-9">
                        <div className="col-sm-4">
                            <div className="panel panel-success">
                                <div className="panel-body">
                                    <h4>Family Vacations</h4>
                                    <img className=" img-responsive img-center" src={homeImg1} alt=""/>
                                    <p><strong>Costa Rica Family Vacations</strong></p>
                                    <p><strong>Family Vacations in Costa Rica</strong> are an excellent option for anybody who wants to travel. <a href="">Read more ...</a></p>
                                </div>
                            </div>
                        </div>
                        <div className="col-sm-4">
                            <div className="panel panel-success">
                                <div className="panel-body">
                                    <h4>All inclusive resorts</h4>
                                    <img className=" img-responsive img-center" src={homeImg2} alt=""/>
                                    <p><strong>If you are looking to take that dream vacation this year,</strong></p>
                                    <p>Check out our <a href="#">Top All Inclusive Resorts</a> <a href="">Read more ...</a></p>
                                </div>
                            </div>
                        </div>
                        <div className="col-sm-4">
                            <div className="panel panel-success">
                                <div className="panel-body">
                                    <h4>Travel agencies</h4>
                                    <img className=" img-responsive img-center" src={homeImg3} alt=""/>
                                    <p><strong>Welcome Travel Agencies!!!</strong></p>
                                    <p>We welcome you, our valued partner in travel. You are important to us, and we want you to know it.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div className="home-about">
            <div className="container">
                <div className="row">
                    <div className="col-lg-12 text-center">
                        <h2>Costa Rica Travel Agency</h2>
                        <hr/>
                    </div>
                </div>
                <div className="row">
                    <div className="col-lg-4 col-lg-offset-2">
                        <p><strong>Why Costa Rica?</strong></p>
                        <p><a href="http://en.wikipedia.org/wiki/Costa_Rica">Costa Rican culture</a>  is the perfect  environment for your adrenaline-filled exploration into rainforest and jungle,  your dream family vacation on tropical beaches, or your business reunion of  class, style and efficiency. Costa Ricans (Ticos) are very friendly and welcoming. They are proud of their heritage, and make it obvious why <strong>Costa  Rica has been categorized as</strong> <strong>"<a href="http://www.happyplanetindex.org/countries/costa-rica/" target="_blank">the greenest and happiest country in the world</a><a href="http://www.happyplanetindex.org/countries/costa-rica/"></a>"</strong>  according to a new list that ranks nations.</p>
                        <p>Most <a href="http://www.costaricatravelandvacations.com/cate-package/2/" target="_blank">Costa  Rica Vacation Travel Packages</a> last from five to fourteen days, and even <a href="http://www.costaricatravelandvacations.com/cat-hotels/luxury/" title="Costa Rica luxury hotels list" target="_blank">the  most luxurious stay</a> would only cost you as much as three thousand dollars per  person. All we need to tell us, is how many people is coming with you, your dates, preferences and special needs.  We will tailor a package to you. Costa  Rica's natural beauty is unique, and it is ranked in the top twenty countries  with the <a href="http://www.inbio.ac.cr/en/conservacion.html" target="_blank">most biodiversity in the world</a>. </p>
                    </div>
                    <div className="col-lg-4">
                        <p>Our magnificent flora and fauna will not disappoint you. Tropical wonders of the  rainforest include: active volcanoes, towering waterfalls, white water rafting  rivers, rainforest canopy and hanging bridge tours, world-class fishing and  dolphin/whale spotting boat tours, pristine turquoise water beaches, monkeys,  parrots, nesting sea turtles, toucans, iguanas, coatis, crocodiles, jaguars,  and more butterflies than anywhere else in the world!</p>
                        <p>The  mountainous terrain always lends breathtaking views, and the delicious local  foods are sure to satisfy. This romantic  atmosphere ripe with adventure is perfect for a <a href="http://www.costaricatravelandvacations.com/cat-honeymoon/" title="honeymoon package" target="_blank">honeymoon package</a> that can  range from one thousand six hundred US dollars only. It already includes a candlelit  dinner for two, served with the finest Costa Rican delicacies and wine as you're  serenaded by surrounding wildlife.</p>
                        <p>Pacific or Caribbean, beach or jungle,  business or pleasure, your personalized package always includes unforgettable  experience and VIP treatment for travelers like you.</p>
                    </div>
                    <div className="col-lg-8 col-lg-offset-2 text-center">
                        <a href="#" className="btn btn-lg btn-warning">
                            <i className="fa fa-wpexplorer"></i> Find Tours
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
);

export default Home;
