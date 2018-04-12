<script type="text/javascript">
    function asideswipe()   {
        var div = document.getElementById('aside'),
        display = getComputedStyle(div, null).display;
         
        if(display == "block")  {
            document.getElementById("aside").style.display = "none";
            document.getElementById("acontent").className = "col-md-12";
        }else   {
            document.getElementById("aside").style.display = "block";
            document.getElementById("acontent").className = "col-md-9";
        }
    }  
</script>

<div class="footer">
    <button class="navbar-toggle" onClick="asideswipe()">+</button> Copyright @ Forkid 2018
</div>
