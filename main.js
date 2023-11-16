$("#account").hide();
$("#driving_mode").hide();
$("#library").show();
$("#ini").hide();
$("#regst").hide();

// Buttons to navigate between pages
$("#btn_account").click(
    function () {
        $("#account").show();
        showuser();
        $("#driving_mode").hide();
        $("#library").hide();
        $(".search_bar").hide();
        $("#reproductor_principal").hide();
    });
$("#btn_account_r").click(
    function () {
        $("#account").show();
        showuser();
        $("#driving_mode").hide();
        $("#library").hide();
        $(".search_bar").hide();
        $("#content_menu_responsive").slideUp();
        $("#reproductor_principal").hide();
    });
$("#btn_library").click(
    function () {
        $("#account").hide();
        $("#driving_mode").hide();
        $("#library").show();
        $(".search_bar").show();
        $("#reproductor_principal").show();
    });
$("#btn_library_r").click(
    function () {
        $("#account").hide();
        $("#driving_mode").hide();
        $("#library").show();
        $(".search_bar").show();
        $("#content_menu_responsive").slideUp();
        $("#reproductor_principal").show();
    });
$("#btn_driving").click(
    function () {
        $("#driving_mode").show();
        $("#reproductor_principal").hide();
        $(".search_bar").hide();
        $(".right_column").hide();
        $(".left_column").hide();
    });
$("#btn_driving_r").click(
    function () {
        $("#driving_mode").show();
        $("#reproductor_principal").hide();
        $(".search_bar").hide();
        $(".right_column").hide();
        $(".left_column").hide();
        $("#content_menu_responsive").slideUp();
    });


$("#drive_output_button").click(
    function () {
        $("#driving_mode").hide();
        $("#reproductor_principal").show();
        $(".search_bar").show();
        $(".right_column").show();
        $(".left_column").show();
    });

$("#menu_responsive").click(
    function () {
        $("#content_menu_responsive").slideToggle();
        $("#list_responsive").slideToggle();
    });

$(".menu_responsive").click(
    function () {
        $("#ini").show();
        $("#regst").show();
    });
    
// esto de abajo es el logout con ventana modal
$("#btn_logout").on("click", function () {
    $("html, body").css("overflow", "hidden");
    $(".overlay, .modal").addClass("active");
});
$("#btn_logout_r").on("click", function () {
    $("html, body").css("overflow", "hidden");
    $(".overlay, .modal").addClass("active");
});

$("#cancel, .overlay").on("click", function () {
    $(".overlay, .modal").removeClass("active");
    $("html, body").css("overflow", "scroll");
});

$("#accept").on("click", function () {
    $("html, body").css("overflow", "scroll");
    window.location.href = "without_login.html";
});

//login
function login() {
    let f = document.forms.inputs_login;
    let username = f.elements.username.value;
    let psw = f.elements.psw.value;

    if (!username || !psw) {
        window.alert("Required fields not completed");
    }
    keys = Object.keys(localStorage);
    var verified = false;
    for (var i = 0; i < keys.length; i++) {
        var user = localStorage.getItem(keys[i]);
        var user = JSON.parse(user);
        if (user.username == username && user.password == psw) {
            verified = true;
            actuser = {
                type: "user",
                username: user.username,
                password: user.password,
                name_surname: user.name_surname,
                email: user.email,
                born: user.born,
                playlist: user.playlist,
            };
            localStorage.removeItem(username);
            localStorage.setItem(username, JSON.stringify(actuser));
            console.log(verified);
        }
    }
    if (verified == false) {
        window.alert("User is not registered");
    }
    if (verified == true) {
        window.location.href = "./index.php";
    }

}

//signup
function createuser() {
    localStorage.clear();
    let f = document.forms.inputs_register;
    let username = f.elements.username.value;
    let psw = f.elements.psw.value;
    let ns = f.elements.ns.value;
    let email = f.elements.email.value;
    let birthdate = f.elements.birthdate.value;
    //falta privacy y foto de perfil
    if (validateuser(username, psw, ns, email, birthdate) == 0) {
        user = {
            type: "user",
            username: username,
            password: psw,
            name_surname: ns,
            email: email,
            born: birthdate,
            //active: "no",
            playlist: "",
        };

        localStorage.setItem(username.toString(), JSON.stringify(user));
        var x = localStorage.getItem(username.toString());
        var x = JSON.parse(x);
        window.location.href = "./login.html";
    }
}

//validate user
function validateuser(username, psw, ns, email, birthdate) {

    var valid = true;
    if (!username || !psw || !ns || !email || !birthdate) {
        window.alert("All the fields are required. Only profile is optional");
        valid = false;
    }

    else {
        if (psw.length > 8) {
            window.alert("Password must be less than 8 characters");
            valid = false;
        }
        let regex_letnum = /^[0-9a-zA-Z]+$/;

        for (var i = 0; i < username.length; i++)
            if (!username[i].match(regex_letnum)) {
                window.alert("Invalid Username");
                valid = false;
            }


        for (var i = 0; i < psw.length; i++)
            if (!psw[i].match(regex_letnum)) {
                window.alert("Invalid Password");
                valid = false;
            }

        let regex_email = /\b[\w\.-]+@[\w\.-]+\.\w{2,4}\b/;
        if (!email.match(regex_email)) {
            window.alert("Invalid Email");
            valid = false;
        }
        if (valid == true) {
            return 0;
        }
        else {
            return 1;
        }

    }
    return 1;

};

//show user data in account
function showuser() {
    keys = Object.keys(localStorage);
    var user = localStorage.getItem(keys[0]);
    var user = JSON.parse(user);
    let f = document.forms.usermodification;
    //f.elements.pastuser.value=user.username;
    f.elements.username.value = user.username;
    f.elements.psw.value = user.password;
    f.elements.ns.value = user.name_surname;
    f.elements.email.value = user.email;
    f.elements.birthdate.value = user.born;
};

//modify user data
function modifyuser() {
    let f = document.forms.usermodification;
    let username = f.elements.username.value;
    let psw = f.elements.psw.value;
    let ns = f.elements.ns.value;
    let email = f.elements.email.value;
    let birthdate = f.elements.birthdate.value;
    if (validateuser(username, psw, ns, email, birthdate) == 0) {
        localStorage.clear();
        user = {
            type: "user",
            username: username,
            password: psw,
            name_surname: ns,
            email: email,
            born: birthdate,
            //active: "no",
        };

        localStorage.setItem(username.toString(), JSON.stringify(user));
        var x = localStorage.getItem(username.toString());
        var x = JSON.parse(x);
    }

    /* Modo conduccion */


    function getRandomInt(max) {
        return Math.floor(Math.random() * max);
    }




}
