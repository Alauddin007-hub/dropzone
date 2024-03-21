<template setup>
    <div class="container">
        <form @submit.prevent="submit">
            <div id="dropzone">
                <vue-dropzone
                    ref="myVueDropzone"
                    id="dropzone"
                    :options="dropzoneOptions"
                />
            </div>
        </form>
    </div>
</template>

<script>
import vueDropzone from "dropzone-vue3";

export default {
    components: {
        vueDropzone,
    },
    props: {
        errors: Object,
    },
    data() {
        return {
            dropzoneOptions: {
                url: "/upload-file/post",
                thumbnailWidth: 150,
                maxFilesize: 10240,
                headers: { "My-Awesome-Header": "header value" },
            },
        };
    },
    methods: {
        submit() {
            if (this.$refs.photo) {
                this.form.file_name = this.$refs.photo.files[0];
            }
            this.form.post(route("image.store"));
        },
        previewImage(e) {
            const file = e.target.files[0];
            this.url = URL.createObjectURL(file);
        },
    },
};
</script>

<style></style>
