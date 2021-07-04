<script>
  export let showOnPx = 100;
  let hidden = true;

  function goTop() {
    document.body.scrollIntoView({behavior: "smooth"});
  }

  function handleOnScroll() {
    if (document.body.scrollTop > showOnPx) {
      hidden = false;
    } else {
      hidden = true;
    }
  }

</script>

<style lang="postcss">
  .back-to-top {
    opacity: 1;
    transition: opacity 0.5s, visibility 0.5s;
    position: fixed;
    z-index: 99;
    right: 20px;
    user-select: none;
    bottom: 20px;
    color: white;
    /* background-color: black; */
  }

  .back-to-top.hidden {
    opacity: 0;
    visibility: hidden;
  }
</style>

<svelte:window on:scroll={handleOnScroll} />

<div class="back-to-top" on:click={goTop} class:hidden>
  <img src="https://img.icons8.com/ios/50/000000/circled-up-2.png" alt="scrollToTop"/>
</div>
