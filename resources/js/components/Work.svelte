<script>
    let works = [
        { images: "/images/lambothumbnail.png", title: "3D Virtual World", link: "/lambo"},
        { images: "/images/financethumbnail.png", title: "Finance Calculator", link: "/finance"},
        { images: "", title: "", link: ""},
        { images: "", title: "", link: ""}
    ]
</script>


<h1 class="text-3xl font-bold px-10 py-4">WORK</h1>

<section class="p-10">
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        {#each works as work}
        <div class="flex items-center justify-center">
            <figure class="relative">
                <a href="{work.link}"><img class="rounded-lg shadow-xl hover:shadow-2xl" alt="{work.title}" src="{work.images}"></a>
                <figcaption class="absolute text-lg -mt-16 text-white px-4">
                    <div class="text-center bg-black text-white px-4">
                        <h1>{work.title}</h1>
                    </div>
                </figcaption>
            </figure>
        </div>
        {/each}
    </div>
</section>



