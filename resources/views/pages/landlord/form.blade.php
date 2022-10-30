<x-layout>
    <x-slot name="header">
        {{ __('New Landlord') }}
    </x-slot>

    <x-panel class="pt-16 pb-16 bg-white">
        <x-splade-form :action="route('landlord.store')">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Basic Information</h3>
                        <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful
                            what you share.</p>
                    </div>
                </div>
                <div class="mt-5 md:col-span-2 md:mt-0">
                    <div class="shadow sm:overflow-hiddensm:rounded-md">
                        <div class="space-y-6 px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <x-splade-input name="name" label="{{ __('Name') }}" />
                                </div>
                            </div>

                            <div>
                                <x-splade-input name="title" label="{{ __('Title') }}" />
                            </div>

                            <div class="grid grid-cols-2 gap-6">
                                <div class="col-span-1 sm:col-span-1">
                                    <x-splade-input name="email" label="{{ __('Email') }}" />
                                </div>
                                <div class="col-span-1 sm:col-span-1">
                                    <x-splade-input name="phone" label="{{ __('Phone') }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Bank Details</h3>
                        <p class="mt-1 text-sm text-gray-600">This information is sensitive and will not share publicly.
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:col-span-2 md:mt-0">
                    <div class="shadow sm:overflow-hiddensm:rounded-md">
                        <div class="space-y-6 px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <x-splade-select name="bank_name" choices label="{{ __('Bank Name') }}"
                                        :options="$banks" />
                                </div>
                                <div class="col-span-3 sm:col-span-2">
                                    <x-splade-input name="bank_account_number"
                                        label="{{ __('Bank Account Number') }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Additional Information</h3>
                        <p class="mt-1 text-sm text-gray-600">This information is additional and will not share
                            publicly.
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:col-span-2 md:mt-0">
                    <div class="shadow sm:overflow-hiddensm:rounded-md">
                        <div class="space-y-6 px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-3 gap-6">
                                <fieldset class="col-span-2 sm:col-span-2">
                                    <legend class="contents text-base font-medium text-gray-900">Value Added Tax
                                    </legend>
                                    <div class="mt-4 space-y-4">
                                        <x-splade-data remember="content" default="{ isTaxable: false, disabled: true }">
                                            <x-splade-checkbox name="is_taxable" label="Is landlord registered on FTA?"
                                                @change="data.isTaxable = !data.isTaxable" />
                                            <x-splade-input v-show="data.isTaxable" name="tax_registration_number"
                                                label="{{ __('Tax Registration Number') }}" />
                                        </x-splade-data>
                                    </div>
                                </fieldset>
                                <fieldset class="col-span-2 sm:col-span-2">
                                    <legend class="contents text-base font-medium text-gray-900">Create User</legend>
                                    <div class="mt-4 space-y-4">
                                        <x-splade-checkbox name="create_user"
                                            label="Create New User for current Landlord?" />
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                            <button type="submit"
                                class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                        </div>
                    </div>
                </div>
            </div>

        </x-splade-form>
    </x-panel>
</x-layout>
