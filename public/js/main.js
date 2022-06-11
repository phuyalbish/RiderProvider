function showhome(){
    document.getElementById('addcontent').style.display = "none";
    document.getElementById('editcontent').style.display = "none";
    document.getElementById('deletecontent').style.display = "none";
    document.getElementById('homecontent').style.display = "block";
}
function showadd(){
    document.getElementById('homecontent').style.display = "none";
    document.getElementById('editcontent').style.display = "none";
    document.getElementById('deletecontent').style.display = "none";
    document.getElementById('addcontent').style.display = "block";
}
function showedit(){
    document.getElementById('addcontent').style.display = "none";
    document.getElementById('homecontent').style.display = "none";
    document.getElementById('deletecontent').style.display = "none";
    document.getElementById('editcontent').style.display = "block";
}
function showdelete(){
    document.getElementById('addcontent').style.display = "none";
    document.getElementById('editcontent').style.display = "none";
    document.getElementById('homecontent').style.display = "none";
    document.getElementById('deletecontent').style.display = "block";
}