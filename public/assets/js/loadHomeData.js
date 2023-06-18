import {swipe} from '/assets/js/swipebanner.js'

async function loadHomeData(){
  var bannerHome = document.querySelector('._bannerHome');
  var trending = document.querySelector('._trending');

  const responses = await Promise.all([
    await fetch('/banner/home',{method:'get'}),
    await fetch('/trendings',{method:'get'})
  ])

  
  const bannerHtml = await responses[0].text();
  const trendingHtml = await responses[1].text();

  bannerHome.innerHTML = bannerHtml;
  trending.innerHTML = trendingHtml;

  // // !! Load banner home
  // const dataBanner = await fetch('/banner/home',{method:'get'});
  // const bannerHtml = await dataBanner.text();
  // bannerHome.innerHTML = bannerHtml;

  // // !! Load trendings
  // const dataTrending = await fetch('/trendings',{method:'get'});
  // const trendingHtml = await dataTrending.text();
  // trending.innerHTML = trendingHtml;

  swipe('.sliderFeaturedPosts');

}

loadHomeData();