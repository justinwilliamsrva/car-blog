<template>
    <div class="container mx-auto px-4 w-full md:w-3/4 lg:w-3/5 xl:w-1/2 mt-20">
        <div>
            <div class="text-lg text-gray-600">By By {{post.author.name}} in {{post.topic.name}} - 3 hours ago </div>
            <h1 class="text-5xl mt-10 font-bold mb-12">{{post.title}}</h1>
            <p class="text-grey-700 pb-3 mb-12 whitespace-pre-line">
               {{post.content}}
            </p>
            <div class="mb-24 flex">
                <div class="mr-6">
                    <img
                        src="'/storage/faces/' + {post.author.avatar}"


                        alt="ahmad"
                        class="w-16 h-16 rounded-full"
                    />
                </div>
                <div class="flex flex-col justify-center">
                    <div class="text-xl text-gray-600">Written by {{post.author.name}}</div>
                    <div class="text-gray-600">Published in {{post.author.name}} on Date</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import gql from "graphql-tag";

export default {
    apollo: {
        post: {
            query: gql`
                query ($id: ID!) {
                    post(id: $id) {
                        id
                        title
                        content
                        author {
                            id
                            name
                            avatar
                        }
                        topic {
                            name
                            slug
                        }
                    }
                }
            `,
            variables() {
                return {
                    id: this.$route.params.id,
                };
            },
        },
    },
};
</script>
