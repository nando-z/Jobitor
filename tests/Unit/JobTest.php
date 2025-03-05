<?php

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('belongs to an employer', function() {
    // Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    // Act & Assert
    expect($job->employer)
        ->toBeInstanceOf(Employer::class)
        ->and($job->employer->id)->toBe($employer->id);
});

it('Have an Tage', function() {
    // Arrange
    $job = Job::factory()->create();

    $job->tag('Front End');

    expect($job->tags)->toHaveCount(1);
});
