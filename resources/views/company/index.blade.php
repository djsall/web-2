<x-app-layout>
    <div class="grid md:grid-cols-2">
        <div class="flex items-center justify-center">
            <h1 class="text-center text-4xl md:text-8xl font-bold py-12 md:py-16">
                Welcome to our dog barber shop!
            </h1>
        </div>
        <img src="https://www.shutterstock.com/image-photo/happy-puppy-welsh-corgi-14-600nw-2270841247.jpg"
             alt="Happy Corgi" class="w-full h-full max-h-[1200px] object-contain">
    </div>
    <div class="mt-32">
        <h2 class="text-center text-3xl md:text-6xl font-bold mb-16">
            Your dog is really safe with us.
        </h2>
        <p class="text-xl md:text-2xl p-5 md:text-center">
            Our passion is dogs.<br>
            We bathe, groom, trim and cut them where they require it,<br>
            with utmost care to their mental and physical well-being.
        </p>
    </div>
    <div class="flex justify-center mt-16 pb-32">
        <a href="{{ "" }}"
        class="px-12 py-8 text-white bg-blue-700 font-bold text-lg hover:bg-blue-950 hover:text-opacity-70 rounded-lg">
            Grab an appointment
        </a>
    </div>
    <div>
        <p class="text-lg p-5 md:text-xl md:text-center text-gray-600">
            We have been in the dog grooming business for decades.<br>
            My mother, <span class="text-blue-700">Alice</span>, has been a dog groomer since late thirties, and<br>
            I've taken it upon myself to provide her service to our loyal customers.<br>
            We are a small, family owned business,<br>
            which has been serving our community since <u class="text-black">1981</u>.
        </p>
    </div>
</x-app-layout>
