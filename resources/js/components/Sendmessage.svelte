
<script>
    import * as yup from "yup";

    async function submitForm() {
      await fetch("https://formspree.io/f/mnqlzrpa", {
        method: 'POST',
        body: JSON.stringify(values, null, 2),
      })
    }

    let values = {}
    let errors = {};

    const regSchema = yup.object().shape({
        email: yup.string().required("Please enter a valid email").email(),
        message: yup.string().required("Please enter a message").min(10, "Your message is too short"),
    })

    const extractErrors = err => {
    return err.inner.reduce((acc, err) => {
        return { ...acc, [err.path]: err.message };
    }, {});
    };
    let msgSuccess = false;
    const submitHandler = async () => {
        try {
            await regSchema.validate(values, { abortEarly: false });
            submitForm();
            msgSuccess = true
            document.getElementById("contact-form").reset();
            errors = {};
        } catch (err) {
            errors = extractErrors(err);
        }
    };


</script>


<form on:submit|preventDefault={submitHandler} id="contact-form" class="w-full p-8 bg-gray-100">
    <div class="grid grid-cols-1 sm:grid-cols-2">
        <div>
            {#if msgSuccess}
                <div class="w-full text-center mb-6 px-3">
                    <p class="text-green-500">Your message has been submitted</p>
                </div>
            {/if}
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                    Email Address
                </label>
                <input id="email" name="email" bind:value={values.email} class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                <p class="text-red-500">{#if errors.email}{errors.email}{/if}</p>
            </div>

            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="message">
                    Message:
                </label>
                <textarea id="message" bind:value={values.message} name="message" rows="3" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"></textarea>
                <p class="text-red-500">{#if errors.message}{errors.message}{/if}</p>
            </div>

            <div class="px-3 text-right">
                <button type="submit" class="bg-green-500 flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded">
                    Send Message
                </button>
            </div>
        </div>
        <div>
            <h2 class="text-xl font-bold">Let's Talk </h2>
            <hr>
            <a href="https://uk.linkedin.com/in/jerick-lontoc-14a054165"><i class="fab fa-linkedin fa-2x"></i></a>
        </div>
    </div>

</form>
