<script>
    export let isOpen = false;
        let navs = [
        { caption: "Home", link: '/' },
        { caption: "About Me", link: '/' },
        { caption: "Skills", link: '/' },
        { caption: "My Work", link: '/' },
        { caption: "Contact", link: '/' }
    ]
</script>


{#if isOpen}
    {#each navs as nav}
        <a href="{nav.link}" class="mt-4 block lg:mt-0 text-teal-lighter hover:text-white mr-10">
            {nav.caption}
        </a>
    {/each}
{/if}
