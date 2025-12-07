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
                'image' => 'team-1.jpg',
                'social' => [
                    'twitter' => '#',
                    'facebook' => '#',
                    'linkedin' => '#',
                ]
            ],
            [
                'name' => 'Diana Petersen',
                'role' => 'Lead Marketer',
                'image' => 'team-2.jpg',
                'social' => [
                    'twitter' => '#',
                    'facebook' => '#',
                    'linkedin' => '#',
                ]
            ],
            [
                'name' => 'Larry Parker',
                'role' => 'Lead Developer',
                'image' => 'team-3.jpg',
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
        $members = $this->members;
        return view('components.team-section',compact('members'));
    }
}
