
  [presentation](https://docs.google.com/presentation/d/1ppcfy_mQ0PRBWfNUuqLY4_iA_SY_bKQC9VbGBFE064w/edit#slide=id.p)
  [repos](https://github.com/S3thBr0wn?tab=repositories)
  [local host](https://10.183.1.9)
  [wiki](https://github.com/S3thBr0wn/S3thBr0wn.github.io/wiki)

<body style="background-color:black;">
<style>
.dropbtn {
    background-color: #3498DB;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #2980B9;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd}

.show {display:block;}
</style>
<script>
  function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
  window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
