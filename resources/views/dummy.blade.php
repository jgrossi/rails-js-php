<ul id="loren" style="display: none;">
    @foreach(range(1, 10) as $i)
        <li>{{ Faker\Factory::create()->text(140) }}</li>
    @endforeach
</ul>