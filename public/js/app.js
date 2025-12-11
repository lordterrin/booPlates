console.log('hello');

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

    const url = '/api/checkState';
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
                window.location.assign(`/state/${stateCode}/submit`);
            } else { // desktop layout utilizes a modal window
                window.location.assign(`/state/${stateCode}/submit`);                
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
        window.location.assign('/');
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



/* main page */
const states = document.getElementsByClassName('map-state');
if ( states ) {

    for ( s of states ) {
        let id = s.id;
        if ( userStates.includes(id) ) {
            s.classList.add('statePositive');
        }
    }

}