<script setup lang="ts">
import LayoutBackground from "@/Components/Layout/LayoutBackground.vue";
import Field from "@/Components/Field/Field.vue";
import Separator from "@/Components/Separator/Separator.vue";

import { Link } from "@inertiajs/vue3";
</script>

<template>
    <LayoutBackground
        class="flex items-center justify-center px-4 md:px-[128px]"
    >
        <section
            class="bg-white border border-neutral-200 flex flex-col px-4 py-8 md:px-8 lg:px-12 rounded-xl w-full max-w-[540px]"
        >
            <div class="flex flex-col gap-2 mb-8">
                <h1 class="text-2xl font-bold tracking-tight self-center">
                    Welcome to Note
                </h1>
                <p
                    class="text-sm text-neutral-500 tracking-tight self-center text-center"
                >
                    Please log in to continue
                </p>
            </div>

            <form class="flex flex-col gap-4">
                <Field label="Email Address" placeholder="email@example.com" />
                <Field label="Password" placeholder="********" type="password">
                    <template #link>
                        <Link
                            href="#"
                            class="text-xs text-neutral-500 underline"
                        >
                            Forgot
                        </Link>
                    </template>
                </Field>
                <button
                    class="bg-blue-600 text-white rounded-lg font-medium tracking-tight py-3"
                >
                    Login
                </button>
                <Separator />
                <p class="self-center text-sm text-neutral-600">
                    No account yet?
                    <Link href="/auth/sign-up" class="text-neutral-950"
                        >Sign up</Link
                    >
                </p>
            </form>
        </section>
    </LayoutBackground>
</template>
