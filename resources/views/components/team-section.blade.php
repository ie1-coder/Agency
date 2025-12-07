<div class="row">
    @foreach($members as $member)
        <div class="col-lg-4 mb-5">
            <x-team-member-card
                :name="$member['name']"
                :role="$member['role']"
                :image="$member['image']"
                :social="$member['social']"
            />
        </div>
    @endforeach
</div>

<div class="row mt-5">
    <div class="col-lg-8 mx-auto text-center">
        <p class="large text-muted">
            Our team thrives on collaboration, innovation, and a shared commitment to excellence.
            We believe that great results begin with great people.
        </p>
    </div>
</div>
