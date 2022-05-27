<?php

declare(strict_types=1);

namespace BrandHub\Brief\Http\Web\Controllers;

use App\Http\Controllers\Controller;
use BrandHub\Brief\Contracts\AdvantageReadStorage;
use BrandHub\Brief\Contracts\ReferenceReadStorage;
use BrandHub\Portfolio\Contracts\ProjectReadStorage;
use Illuminate\Contracts\View\View;

final class LandingController extends Controller
{
    private ReferenceReadStorage $referenceReadStorage;
    private AdvantageReadStorage $advantageReadStorage;
    private ProjectReadStorage $projectReadStorage;

    public function __construct(ReferenceReadStorage $referenceReadStorage, AdvantageReadStorage $advantageReadStorage, ProjectReadStorage $projectReadStorage)
    {
        $this->referenceReadStorage = $referenceReadStorage;
        $this->advantageReadStorage = $advantageReadStorage;
        $this->projectReadStorage = $projectReadStorage;
    }

    public function __invoke(): View
    {
        return view(
            'brief::landing.index',
            [
                'productReferences' => $this->referenceReadStorage->findByBusinessType('product', 18, 0),
                'serviceReferences' => $this->referenceReadStorage->findByBusinessType('service', 18, 0),
                'advantages' => $this->advantageReadStorage->find(),
                'portfolioProjects' => $this->projectReadStorage->find(),
            ]
        );
    }
}
