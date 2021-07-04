<script>
  import Mobilenav from "../components/Mobilenav.svelte"

  let navs = [
      { caption: "Home", link: '/' },
      { caption: "About Me", link: '/' },
      { caption: "Skills", link: '/' },
      { caption: "My Work", link: '/' },
      { caption: "Contact", link: '/' }
  ]
  let isOpen = false
  let scrolled = false
  let navbar = document.querySelector("nav");

  window.onscroll = function () {
      if (window.pageYOffset > 100) {
          scrolled = true;
      } else {
        scrolled = false;
      }
  };


</script>

<nav class="fixed w-full z-10 flex items-center justify-between flex-wrap p-6 bg-transparent" class:scrolled>
  <div class="flex items-center flex-no-shrink text-white ml-32 sm:ml-44">
      <img src="/images/logo.png" width="150" height="150" alt="Logo">
    </div>
    <div class="block lg:hidden" id="nav-burger">
      <button on:click={() => isOpen = !isOpen} class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white">
        <svg class="h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
      </button>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
      <div class="text-sm lg:flex-grow"></div>
      <!-- <div class="">
        <img src="https://img.icons8.com/material-rounded/24/000000/home.png"/>
        <img src="https://img.icons8.com/material-rounded/24/000000/info.png"/>
        <img src="https://img.icons8.com/material-rounded/24/000000/experience-skill.png"/>
        <img src="https://img.icons8.com/ios-glyphs/30/000000/portfolio.png"/>
        <img src="https://img.icons8.com/material-rounded/24/000000/new-contact.png"/>
      </div> -->
      <div>
        {#each navs as nav}
            <a href="{nav.link}" class="hidden mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-10">
                {nav.caption}
            </a>
        {/each}

        <Mobilenav bind:isOpen/>
      </div>
    </div>
</nav>

<style>
  nav.scrolled {
    background: #4d4d56
  }
</style>