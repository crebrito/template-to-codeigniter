import {swipe} from '/assets/js/swipebanner.js'

async function loadHomeData(){
  var bannerHome = document.querySelector('._bannerHome');
  var recent = document.querySelector('._recent');
  var categoryCulture = document.querySelector('._category_culture');

  const responses = await Promise.all([
    await fetch('/banner/home',{method:'get'}),
    await fetch('/trendings',{method:'get'}),
    await fetch('/recent',{method:'get'}),
    await fetch('/category/culture',{method:'get'})
  ])

  const bannerHtml = await responses[0].text();
  const trendingHtml = await responses[1].text();
  const recentHtml = await responses[2].text();
  const categoryCultureHtml = await responses[3].text();

  bannerHome.innerHTML = bannerHtml;
  recent.innerHTML = recentHtml;
  categoryCulture.innerHTML = categoryCultureHtml;

  var trending = document.querySelector('._trending');
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