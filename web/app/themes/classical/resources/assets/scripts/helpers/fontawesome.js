// import then needed Font Awesome functionality
import { library, dom } from '@fortawesome/fontawesome-svg-core';
// import the Facebook and Twitter icons
import { faFacebook, faTwitter, faLinkedin, faYoutube, faInstagram } from "@fortawesome/free-brands-svg-icons";

// add the imported icons to the library
library.add(faFacebook, faTwitter, faLinkedin, faYoutube, faInstagram);

// tell FontAwesome to watch the DOM and add the SVGs when it detects icon markup
dom.watch();
