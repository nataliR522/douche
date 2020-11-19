document.addEventListener('DOMContentLoaded', function () {
    const formWrapper = document.getElementById('register-form');
    const form = document.getElementsByClassName('register-step');
    const progressPanel = document.getElementsByClassName('register-bottom')[0];
    const progressBar = document.getElementsByClassName('progress-bar')[0];
    const registerBtn = document.getElementsByClassName('register-btn');
    const modifyBtn = document.getElementsByClassName('modify-btn')[0];
    const back = document.getElementsByClassName('back')[0];
    const success = document.getElementsByClassName('register-success')[0];
    const progressLine = progressBar.children[0];
    const addressFrom = document.getElementsByClassName('address-form')[0];
    const checkbox = document.getElementsByClassName('checkbox-primary')[0];
    let percent = 0;

    // fields
    const street_number = document.getElementById('street_number');
    const postal_code = document.getElementById('postal_code');
    const locality = document.getElementById('locality');
    const country = document.getElementById('country');
    const employee = document.getElementsByClassName('employee');
    const income = document.getElementById('income');
    const people = document.getElementById('people');
    const name = document.getElementById('name');
    const phone = document.getElementById('phone');
    const email = document.getElementById('email');

    // Hide header whe focus input
    const input = document.getElementsByTagName('input');
    const header = document.getElementsByTagName('header')[0];

    for (let i = 0; i < input.length; i++) {
        input[i].addEventListener('focus', function () {
            if (window.innerWidth < 1024) {
                if (this.getAttribute('type') === 'text') {
                    header.style.display = 'none'
                }
            }
        });
        input[i].addEventListener('blur', function () {
            if (window.innerWidth < 1024) {
                if (this.getAttribute('type') === 'text') {
                    header.style.display = 'block'
                }
            }
        })
    }

    // Scroll form to top
    function positionForm() {
        const bodyRect = document.body.getBoundingClientRect(),
            elemRect = formWrapper.getBoundingClientRect();
        return elemRect.top - bodyRect.top;
    }


    // Initial state
    progressLine.style.width = `${(percent / form.length) * 100}%`;
    for (let i = 0; i < form.length; i++) {
        form[i].style.display = `none`;
    }
    form[0].style.display = `block`;
    progressPanel.style.display = `none`;

    // Click on Button and switch in next step
    for (let i = 0; i < registerBtn.length; i++) {
        registerBtn[i].addEventListener('click', function () {
            if (window.innerWidth < 768) {
                window.scrollTo(0, (positionForm() - 120));
            }
            // Skip Step 5 if Step 4 is "Non"
            if (percent === 4) {
                for (let i = 0; i < registerBtn.length; i++) {
                    if (employee[i].checked) {
                        if (employee[i].value === 'Non') {
                            percent++;
                        }
                    }
                }
            }

            if (percent < 11) {
                percent++;
                progressLine.style.width = `${(percent / form.length) * 100}%`;
                for (let i = 0; i < form.length; i++) {
                    form[i].style.display = `none`;
                }
                form[percent].style.display = `block`;
                progressPanel.style.display = `block`;
            } else {
                let formData = new FormData($('#register-form')[0]);
                $.ajax({
                    type: 'post',
                    url: '/server/register.php',
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function (res) {
                        let data = JSON.parse(res);
                        console.log(res)
                        if (data.success) {
                            form[percent].style.display = `none`;
                            progressPanel.style.display = `none`;
                            success.style.display = `block`;
                        }
                    },
                    error: function (err) {
                        console.log(err)
                    }
                })
            }
            if (percent === 3 || percent === 6 || percent === 7 || percent === 11) {
                for (let i = 0; i < registerBtn.length; i++) {
                    registerBtn[i].setAttribute('disabled', 'true')
                }
            }

            for (let i = 0; i < registerBtn.length; i++) {
                registerBtn[i].setAttribute('percent', percent)
            }
        });
    }

    // Click on Button and switch in previous step
    back.addEventListener('click', function () {
        if (window.innerWidth < 768) {
            window.scrollTo(0, (positionForm() - 120));
        }

        if (percent > 0) {
            percent--;
            progressLine.style.width = `${(percent / form.length) * 100}%`;
            for (let i = 0; i < form.length; i++) {
                form[i].style.display = `none`;
            }
            form[percent].style.display = `block`;

            if (percent !== 3 || percent !== 6 || percent !== 7 || percent !== 11) {
                for (let i = 0; i < registerBtn.length; i++) {
                    registerBtn[i].removeAttribute('disabled')
                }
            }
        } else {
            percent = 0;
            for (let i = 0; i < form.length; i++) {
                form[i].style.display = `none`;
            }
            form[percent].style.display = `block`;
        }

        if (percent < 1) {
            progressPanel.style.display = `none`;
        }

        for (let i = 0; i < registerBtn.length; i++) {
            registerBtn[i].setAttribute('percent', percent)
        }
    });

    // Click on Button and show Address
    const address = document.getElementById('autocomplete');
    modifyBtn.addEventListener('click', function () {
        addressFrom.classList.toggle('d-none');
        checkbox.classList.toggle('d-none');
        address.classList.toggle('d-none');
        address.value = '';
        street_number.value = '';
        postal_code.value = '';
        locality.value = '';
        country.value = 'France';
        if (address.value === '') {
            for (let i = 0; i < registerBtn.length; i++) {
                registerBtn[i].setAttribute('disabled', 'true')
            }
        }
    });

    // Autocomplete Field with Google Maps
    let autocomplete;
    const componentForm = {
        street_number: "short_name",
        route: "long_name",
        locality: "long_name",
        country: "long_name",
        postal_code: "short_name",
    };

    function initAutocomplete() {
        // Create the autocomplete object, restricting the search predictions to
        // geographical location types.
        autocomplete = new google.maps.places.Autocomplete(address, {types: ["geocode"]});
        // Set initial restrict to the greater list of countries.
        autocomplete.setComponentRestrictions({
            country: ["fr"],
        });
        // Avoid paying for data that you don't need by restricting the set of
        // place fields that are returned to just the address components.
        autocomplete.setFields(["address_component"]);
        // When the user selects an address from the drop-down, populate the
        // address fields in the form.
        autocomplete.addListener("place_changed", fillInAddress);
    }

    initAutocomplete();

    function fillInAddress() {
        addressFrom.classList.toggle('d-none');
        checkbox.classList.toggle('d-none');
        address.classList.toggle('d-none');
        modifyBtn.classList.remove('d-none');
        if (address.value !== '') {
            for (let i = 0; i < registerBtn.length; i++) {
                registerBtn[i].removeAttribute('disabled')
            }
        }
        // Get the place details from the autocomplete object.
        const place = autocomplete.getPlace();
        for (const component in componentForm) {
            if (component === 'route') {
                document.getElementById('street_number').value = "";
                document.getElementById('street_number').setAttribute('readonly', 'true');
            } else {
                document.getElementById(component).value = "";
                document.getElementById(component).setAttribute('readonly', 'true');
            }
        }

        // Get each component of the address from the place details,
        // and then fill-in the corresponding field on the form.
        for (const component of place.address_components) {
            const addressType = component.types[0];

            if (componentForm[addressType]) {
                if (addressType === 'route') {
                    document.getElementById('street_number').value = `${document.getElementById('street_number').value} ${component[componentForm[addressType]]}`;
                } else {
                    document.getElementById(addressType).value = component[componentForm[addressType]];
                }
            }
        }
    }

    // Bias the autocomplete object to the user's geographical location,
    // as supplied by the browser's 'navigator.geolocation' object.
    address.addEventListener('focus', function () {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition((position) => {
                const geolocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude,
                };
                const circle = new google.maps.Circle({
                    center: geolocation,
                    radius: position.coords.accuracy,
                });
                autocomplete.setBounds(circle.getBounds());
            });
        }
    });


    // Validation form
    let disabled = false;
    checkbox.addEventListener('mousedown', function () {
        disabled = !disabled;
        addressFrom.classList.toggle('d-none');
        modifyBtn.classList.toggle('d-none');
        address.removeAttribute("readonly");
        street_number.removeAttribute("readonly");
        postal_code.removeAttribute("readonly");
        locality.removeAttribute("readonly");
        if (disabled) {
            address.setAttribute("readonly", "true");
        }
    });

    const validationInput = (selector, min, max) => (
        selector.addEventListener('input', function () {
            if (this.value !== '' && this.value >= min && this.value <= max) {
                for (let i = 0; i < registerBtn.length; i++) {
                    registerBtn[i].removeAttribute('disabled')
                    this.style.borderColor = '';
                }
            } else {
                for (let i = 0; i < registerBtn.length; i++) {
                    registerBtn[i].setAttribute('disabled', 'true')
                    this.style.borderColor = 'red';
                }
            }
        })
    );

    function validateEmail(email) {
        const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    const validationInputInformation = (selector) => {
        selector.addEventListener('input', function () {
            selector.style.borderColor = 'red';

            if (selector.getAttribute('id') === 'name' && selector.value !== '') {
                selector.style.borderColor = '';
            }

            if (selector.getAttribute('id') === 'phone' && selector.value !== '' && (selector.value.length === 10 || selector.value.length === 9)) {
                selector.style.borderColor = '';
            }

            if (selector.getAttribute('id') === 'email' && validateEmail(email.value)) {
                selector.style.borderColor = '';
            }
            if ((validateEmail(email.value) && name.value !== '' && phone.value !== '' && (phone.value.length === 10 || phone.value.length === 9))) {
                for (let i = 0; i < registerBtn.length; i++) {
                    registerBtn[i].removeAttribute('disabled')
                }
                selector.style.borderColor = '';
            } else {
                for (let i = 0; i < registerBtn.length; i++) {
                    registerBtn[i].setAttribute('disabled', 'true')
                }
            }
        })
    };

    validationInput(income, 1, 100000);
    validationInput(people, 1, 10);
    validationInputInformation(email);
    validationInputInformation(name);
    validationInputInformation(phone);


    // loading
    const loading = document.getElementsByClassName('loading')[0];
    let stateCheck = setInterval(() => {
        if (document.readyState === 'complete') {
            clearInterval(stateCheck);
            loading.style.display = 'none'
        }
    }, 1000);
});