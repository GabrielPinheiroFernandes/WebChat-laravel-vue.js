<template>
    <AppLayout title="Chat">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Chat</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex" style="min-height: 400px; max-height: 500px;">
                    
                    <!-- List Users -->
                    <div class="w-3/12 bg-gray-200 bg-opacity-25 border-r border-gray-200 overflow-y-scroll">
                        <ul>
                            <li class="p-6 text-lg text-gray-600 leading-7 font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                <p class="flex items-center">
                                    Robson v. leite
                                    <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span>
                                </p>
                            </li>
                            <li class="p-6 text-lg text-gray-600 leading-7 font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                <p class="flex items-center">
                                    Pedro Vasconcelos
                                    <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span>
                                </p>
                            </li>
                            <li class="p-6 text-lg text-gray-600 leading-7 font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                <p class="flex items-center">
                                    Abner Pedro
                                    <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span>
                                </p>
                            </li>
                            <li class="p-6 text-lg text-gray-600 leading-7 font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                <p class="flex items-center">
                                    João Oliveira
                                    <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span>
                                </p>
                            </li>
                            
                            
                        </ul>
                    </div>

                    <!-- Box Message -->
                    <div class="w-9/12 flex flex-col justify-between">

                        <!-- Message -->
                        <div class="w-full p-6 flex flex-col overflow-y-scroll flex-grow" style="max-height: 400px;">
                            <div class="w-full mb-3 text-right">
                                <p class="inline-block p-2 rounded-md messageFromMe" style="max-width: 75%;">
                                    Olá.                                    
                                </p>
                                <span class="block mt-1 text-xs text-gray-500">21/10/2020 17:43</span>
                            </div>
                            <div class="w-full mb-3 text-left">
                                <p class="inline-block p-2 rounded-md messageToMe" style="max-width: 75%;">
                                    Oii!                                    
                                </p>
                                <span class="block mt-1 text-xs text-gray-500">21/10/2020 17:43</span>
                            </div>
                           
                        </div>

                        <!-- Form -->
                        <div class="flex rounded-md overflow-hidden border border-gray-300">
                            <form class="flex-1 bg-gray-200 bg-opacity-25 p-6 border-t border-gray-200 flex">
                                <input type="text" name="message" id="message" class="flex-grow px-4 py-2 text-sm focus:outline-none" placeholder="Digite sua mensagem">
                                <button type="submit" class="bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-2">Enviar</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<style>
.messageFromMe {
    @apply bg-indigo-300 bg-opacity-25;
}
.messageToMe {
    @apply bg-indigo-300 bg-opacity-25;
}
</style>
