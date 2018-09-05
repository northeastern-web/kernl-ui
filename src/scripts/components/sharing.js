// Components
// Sharing


/**
 * PODShare method
 * @param {string} service   name of service
 * @param {string} url       sharing url
 * @param {number} winWidth  width of window
 * @param {number} winHeight height of window
 */
 window.PODShare = (service, url, winWidth, winHeight) => {
   let serviceUrl;
   const winTop = (screen.height / 2) - (winHeight / 2);
   const winLeft = (screen.width / 2) - (winWidth / 2);

   switch (service) {
     case 'facebook':
     serviceUrl = 'https://www.facebook.com/sharer.php?u=';
     break;
     case 'twitter':
     serviceUrl = 'https://twitter.com/intent/tweet?url=';
     break;
     case 'linkedin':
     serviceUrl = 'https://www.linkedin.com/shareArticle?mini=true&url=';
     break;
     case 'email':
     serviceUrl = `mailto:%20?subject=${document.title}&body=I%20wanted%20to%20share%20this%20Northeastern%20web%20page%20with%20you:%20%0D%0A%0D%0A`;
     break;
     default:
     serviceUrl = '#';
   }

   if (service === 'email') {
     window.location.href = serviceUrl + url;
   } else {
     window.open(serviceUrl + url, 'sharer', `top=${winTop},left=${winLeft},toolbar=0,status=0,width=${winWidth},height=${winHeight}`);
   }
 };
