<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TeamSection extends Component
{
    /**
     * The list of team members to display.
     *
     * @var array
     */
    public $members;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Define team members data once — reusable anywhere
        $this->members = [
            [
                'name' => 'Parveen Anand',
                'role' => 'Lead Designer',
                'image' => 'assets/img/team/1.jpg',
                'social' => [
                    'twitter' => '#',
                    'facebook' => '#',
                    'linkedin' => '#',
                ]
            ],
            [
                'name' => 'Diana Petersen',
                'role' => 'Lead Marketer',
                'image' => 'assets/img/team/2.jpg',
                'social' => [
                    'twitter' => '#',
                    'facebook' => '#',
                    'linkedin' => '#',
                ]
            ],
            [
                'name' => 'Larry Parker',
                'role' => 'Lead Developer',
                'image' => 'assets/img/team/3.jpg',
                'social' => [
                    'twitter' => '#',
                    'facebook' => '#',
                    'linkedin' => '#',
                ]
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.team-section');
    }
}
