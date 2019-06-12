<header class="bg-blue-600 py-4">
    <nav class="container flex justify-start mx-auto text-sm section">
        <a class="mr-8 text-white {{ $active == 'home' ? 'opacity-100' : 'opacity-75'}}" href="/">Home</a>

        <a class="mr-8 text-white {{ $active == 'feedback' ? 'opacity-100' : 'opacity-75'}}" href="/feedback/create">Feedback</a>

        <a class="mr-8 text-white {{ $active == 'add-to-site' ? 'opacity-100' : 'opacity-75'}}" href="/add-to-site">Add
            to your site</a>

    </nav>
</header>