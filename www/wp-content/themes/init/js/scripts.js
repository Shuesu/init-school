function requestAxios(n,e,t){axios.post("/wp-admin/admin-ajax.php?action="+n,e).then(function(n){t&&t(n.data)})}document.getElementsByClassName("menu__text").onclick=function(){document.getElementsByClassName("menu__nav").classList.add("menu__nav-active")};