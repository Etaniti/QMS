<template>
    <div class="container">

    </div>
</template>

<script>
    let post_2 = document.getElementById("post_2");

    post_2.innerHTML = addEvent("mouseover", function( event ) {
        event.target.style.display = "d-inline";
    })
</script>
