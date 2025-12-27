console.log('hello');

let guestMode = false;
let API_BASE;
let BASE_URL;
if (window.APP_ENV == 'production') {
    API_BASE = '/booPlates/api';    
    BASE_URL = '/booPlates/';
} else {
    API_BASE = '/api';
    BASE_URL = '/';
}

console.log(API_BASE);

const mobileLayout = window.matchMedia('(max-width: 768px)');
let isMobileLayout = mobileLayout.matches;

mobileLayout.addEventListener('change', e => {
    if (e.matches) {
        isMobileLayout = true;
        console.log("device is now in mobile mode");
    } else {
        isMobileLayout = false;
        console.log("device is now in desktop mode");
    }
});

const svg = document.getElementById('big-map')
if ( svg ) {
    svg.addEventListener('click', function(event) {
        
        const target = event.target;             
        const id = target.id.slice(0,2).toUpperCase();

        if ( id ) {
            checkState(id);
        }
    });
}

function checkState(id) {

    if ( isGuestMode() ) {
        return false;
    }

    const url = `${API_BASE}/checkState`;
    fetch(url, {
        method: 'POST',
        headers: {'Content-type':'application/json'},
        body: JSON.stringify({id})
    }).then( (response) => {
        return response.json();
    }).then( (data) => {
        
        const stateStatus = data.image_url;
        const stateCode = data.state;

        if ( stateStatus ) {
            /* there is a photo on file - show it to the user */
            ShowStatePhoto(stateCode);
        } else {
            /* There is no photo on file for this state.  Allow the user to upload one */
            
            if ( isMobileLayout ) { // mobile layout redirects to a separate page for upload
                window.location.assign(`state/${stateCode}/submit`);
            } else { // desktop layout utilizes a modal window
                window.location.assign(`state/${stateCode}/submit`);                
                ShowStateUploadModal(stateCode);
            }
        }

    }).catch( (err) => {
        console.error("fetch error: " + err);
        return err;
    });

}

function ShowStatePhoto(stateCode) {
    console.log('ShowStatePhoto function.');
}

function ShowStateUploadModal(stateCode) {
    console.log('ShowStateUploadModal function.');
}

/* file upload page */
const backButton = document.querySelector('.back-button-wrapper');
const uploadLink = document.querySelector('#upload-link');
const fileInput = document.getElementById('state-upload-file-input');

if ( backButton ) {
    backButton.addEventListener('click', (e) => {
        window.location.assign(window.BASE_URL);
    });
}

if ( uploadLink && fileInput ) {    
    uploadLink.addEventListener('click', (e) => {
        e.preventDefault();
        fileInput.click();        
    });
}

const form       = document.getElementById('uploadForm');
const stateImage = document.querySelector('.state-image');

if (fileInput && form && stateImage) {
    fileInput.addEventListener('change', () => {
        const file = fileInput.files[0];
        if (!file) return;

        // only allow images
        if (!file.type.startsWith('image/')) {
            alert('Please upload an image file.');
            fileInput.value = '';
            return;
        }

        const reader = new FileReader();

        reader.addEventListener('load', () => {
            // Clear previous content
            stateImage.innerHTML = '';

            // Create an <img> for the preview
            const img = document.createElement('img');
            img.src = reader.result;
            img.alt = 'State photo preview';
            img.style.maxWidth = '100%';
            img.style.maxHeight = '100%';
            img.style.display = 'block';

            stateImage.appendChild(img);

            // Auto-submit the form after preview is set
            form.submit();
        });

        // Read file as data URL so we can show it in the <img>
        reader.readAsDataURL(file);
    });
}

function isGuestMode() {
    if (Array.isArray(guestStates) && guestStates.length > 0 ) {
        guestMode = true;
        return true;
    } else {
        guestMode = false;
        return false;
    }
}

/* main page */
const states = document.getElementsByClassName('map-state');
if ( states ) {

    for ( s of states ) {
        let id = s.id;
        if ( isGuestMode() ) {            
            if ( guestStates.includes(id) ) {
                s.classList.add('statePositive');
            }
        } else if ( userStates.includes(id) ) {            
            s.classList.add('statePositive');
        }
    }

}


/* header */
const logoutButton = document.querySelector('#user-profile-button');
if ( logoutButton ) {
    logoutButton.addEventListener('click', (e) => {
        window.location.assign('logout');
    });
}
const logoButton = document.getElementById('header-logo');
if ( logoButton ) {
    logoButton.addEventListener('click', (e) => {
        window.location.assign(window.BASE_URL);
    })
}

/* level 7 */
const levelCallout = document.getElementById('level-callout');
if ( levelCallout ) {
    levelCallout.addEventListener('click', (e) => {
        if ( levelCallout.innerHTML == 'Level 7:' ) {
            launchGifAcrossScreen('img/giphy.gif');
        }
    });
}
function launchGifAcrossScreen(gifUrl) {
    // Create the image element
    const img = document.createElement('img');
    img.src = gifUrl;
    img.style.position = 'fixed';
    img.style.left = '0px';
    img.style.bottom = '0px';
    img.style.width = '250px';         // adjust size as you want
    img.style.pointerEvents = 'none';  // don't block user clicks
    img.style.zIndex = 999999;

    document.body.appendChild(img);

    // Starting position (bottom-left)
    let x = 0;
    let y = 0;

    // Target end position (top-right)
    const endX = window.innerWidth - 150;
    const endY = window.innerHeight - 150;

    // Animation timing
    const duration = 4000; // ms
    const startTime = performance.now();

    function animate(now) {
        const progress = (now - startTime) / duration;

        if (progress >= 1) {
            // End the animation
            img.remove();
            return;
        }

        // Base linear movement
        let newX = x + (endX - x) * progress;
        let newY = y + (endY - y) * progress;

        // Add randomness for erratic motion
        const erraticStrength = 10; // tweak this
        newX += (Math.random() - 0.5) * erraticStrength;
        newY += (Math.random() - 0.5) * erraticStrength;

        // Apply bounds so it never goes off-screen
        newX = Math.max(0, Math.min(newX, endX));
        newY = Math.max(0, Math.min(newY, endY));

        img.style.transform = `translate(${newX}px, -${newY}px)`;

        requestAnimationFrame(animate);
    }

    requestAnimationFrame(animate);
}


/* Mobile */
const mobileNav = document.querySelector('.mobile-nav');
const mobileOpen = document.getElementById('mobile-nav-open');
if ( mobileOpen ) {
    mobileOpen.addEventListener('click', function() {        
        let isOpen = mobileNav.classList.contains('nav-open');
        if ( isOpen ) {
            //mobileNav.classList.remove('nav-open');
        } else {
            mobileNav.classList.add('nav-open');
        }
    });
}
const mobileClose = document.querySelector('#mobile-nav-close');
if ( mobileClose ) {    
    mobileClose.addEventListener('click', function() {
        console.log('close click');
        mobileNav.classList.remove('nav-open');
    });
}
const headerToggleWhat = document.getElementById('header-toggle-what');
if ( headerToggleWhat ) {
    const headerExpWhat = document.getElementById('header-exp-what');
    const headerWhatToggleSvg = document.getElementById('header-toggle-what-svg');
    headerToggleWhat.addEventListener('click', function() {        
        headerExpWhat.classList.toggle('explanation-open');
        headerWhatToggleSvg.classList.toggle('chevron-open');
    });
}
const headerToggleHow = document.getElementById('header-toggle-how');
if ( headerToggleHow ) {
    const headerExpHow = document.getElementById('header-exp-how');
    const headerHowToggleSvg = document.getElementById('header-toggle-how-svg');
    headerToggleHow.addEventListener('click', function() {        
        headerExpHow.classList.toggle('explanation-open');
        headerHowToggleSvg.classList.toggle('chevron-open');
    });
}
const headerToggleStack = document.getElementById('header-toggle-stack');
if ( headerToggleStack ) {
    const headerExpStack = document.getElementById('header-exp-stack');
    const headerStackToggleSvg = document.getElementById('header-toggle-stack-svg');
    headerToggleStack.addEventListener('click', function() {        
        headerExpStack.classList.toggle('explanation-open');
        headerStackToggleSvg.classList.toggle('chevron-open');
    });
}