<h3 class="font-bold text-xl mb-4">Friends</h3>

<ul>
    @foreach (range(1, 8) as $index)
    <li class="mb-4">
        <div class="flex items-center text-sm">
            <img src='https://avataaars.io/?avatarStyle=Circle&topType=Hat&accessoriesType=Prescription02&facialHairType=BeardMajestic&facialHairColor=BrownDark&clotheType=BlazerSweater&eyeType=Surprised&eyebrowType=DefaultNatural&mouthType=Twinkle&skinColor=Tanned' alt="" class="rounded-full mr-2 w-12"/>
            John Doe
        </div>
    </li>
    @endforeach
</ul>