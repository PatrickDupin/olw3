<x-app-layout>
    <div class="bg-tertiary-900">
        <div class="fixed left-0 top-0 hidden lg:block h-full w-1/2 bg-tertiary-900">

        </div>
        <div class="fixed right-0 top-0 hidden lg:block h-full w-1/2 bg-tertiary-800">

        </div>

        <div class="relative mx-auto grid max-w-7xl grid-cols-1 lg:grid-cols-2 gap-x-16 lg:px-8 lg:pt-16">
            <section aria-labelledby="suymmary-heading"
                class="bg-tertiary-800 py-12 md:px-10 lg:col-start-2 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:bg-transparent lg:px-0 lg:pb-24 lg:pt-0">
                <div class="mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0">
                    <dl>
                        <dt class="text-lg font-medium text-primary-200">Resumo</dt>
                    </dl>

                    <x-checkout.product-list>
                        <x-checkout.product-item
                            image="https://tailwindui.com/img/ecommerce-images/checkout-page-07-product-01.jpg"
                            name="High Wall Tote"
                            price="210,00"
                            :features="[
                                'White and black',
                                '15L',
                                ]"
                        />
                    </x-checkout.product-list>

                    <dl class="space-y-6 border-t border-white border-opacity-10 pt-6 text-sm font-medium">
                        <x-checkout.summary-item title="Subtotal" value="570,00" />
                        <x-checkout.summary-item title="Frete" value="50,00" />
                        <x-checkout.summary-item title="Total" value="620,00" :is-last="true" />
                    </dl>
                </div>
            </section>

            <section aria-labelledby="payment-and-shipping-heading"
                class="py-16 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:pb-24 lg:pt-0">

                <form>
                    <div class="mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0">
                        <div>
                            <x-section-title title="INFORMAÇÕES DE CONTATO" />

                            <div class="mt-6">
                                <x-input-label for="email-adrress" value="Email" />
                                <div class="mt-1">
                                    <x-text-input
                                        type="email"
                                        id="email-address"
                                        name="name"
                                        autocomplete="email"
                                        placeholder="teste@teste.com.br"
                                    />
                                </div>

                                <div class="mt-10">
                                    <x-section-title title="DETALHES DO PAGAMENTO" />

                                    <div class="mt-6 grid grid-cols-3 gap-x-4 gap-y-6 sm:grid-cols-4">
                                        <div class="col-span-3 sm:col-span-4">
                                            <x-input-label for="card-number" value="Número do cartão" />
                                            <div class="mt-1">
                                                <x-text-input
                                                    type="text"
                                                    id="card-number"
                                                    name="card-number"
                                                    placeholder="1234567890123456"
                                                />
                                            </div>
                                        </div>

                                        <div class="col-span-3 sm:col-span-4">
                                            <x-input-label for="name" value="Nome" />
                                            <div class="mt-1">
                                                <x-text-input
                                                    type="text"
                                                    id="name"
                                                    name="name"
                                                    placeholder="Maria Joaquina da Silva"
                                                />
                                            </div>
                                        </div>


                                        <div class="col-span-2 sm:col-span-3">
                                            <x-input-label for="expiration-date" value="Validade do cartão" />
                                            <div class="mt-1">
                                                <x-text-input
                                                    type="text"
                                                    id="expiration-date"
                                                    name="expiration-date"
                                                    placeholder="MM / AA"
                                                />
                                            </div>
                                        </div>


                                        <div class="col-span-1 sm:col-span-1">
                                            <x-input-label for="cvc" value="CVC" />
                                            <div class="mt-1">
                                                <x-text-input
                                                    type="text"
                                                    id="cvc"
                                                    name="cvc"
                                                    placeholder="123"
                                                />
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="mt-10">
                                    <x-section-title title="ENDEREÇO" />

                                    <div class="mt-6 grid grid-cols-3 gap-x-4 gap-y-6 sm:grid-cols-4">
                                        <div class="col-span-3 sm:col-span-4">
                                            <x-input-label for="address" value="Logadrouro" />
                                            <div class="mt-1">
                                                <x-text-input
                                                    type="text"
                                                    id="address"
                                                    name="address"
                                                    autocomplete="street-address"
                                                    placeholder="Rua Dom Pedro I, 123"
                                                />
                                            </div>
                                        </div>


                                        <div class="col-span-1 sm:col-span-2">
                                            <x-input-label for="city" value="Cidade" />
                                            <div class="mt-1">
                                                <x-text-input
                                                    type="text"
                                                    id="city"
                                                    name="city"
                                                    autocomplete="address-level2"
                                                    placeholder="Petrópolis"
                                                />
                                            </div>
                                        </div>


                                        <div class="col-span-1 sm:col-span-1">
                                            <x-input-label for="region" value="UF" />
                                            <div class="mt-1">
                                                <x-text-input
                                                    type="text"
                                                    id="region"
                                                    name="region"
                                                    autocomplete="address-level1"
                                                    placeholder="RJ"
                                                />
                                            </div>
                                        </div>

                                        <div class="col-span-1 sm:col-span-1">
                                            <x-input-label for="postal-code" value="CEP" />
                                            <div class="mt-1">
                                                <x-text-input
                                                    type="text"
                                                    id="postal-code"
                                                    name="postal-code"
                                                    autocomplete="postal-code"
                                                    placeholder="12345-678"
                                                />
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <div class="mt-10 flex justify-end border-t border-tertiary-800-200 pt-6">
                                    <button type="submit"
                                        class="rounded-md border border-transparent bg-primary-200 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-tertiary-800-50"
                                    >Comprar</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>

            </section>
        </div>
    </div>
</x-app-layout>
