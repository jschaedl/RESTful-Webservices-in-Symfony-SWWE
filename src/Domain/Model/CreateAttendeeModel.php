<?php

declare(strict_types=1);

namespace App\Domain\Model;

use OpenApi\Annotations\Property;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;

final class CreateAttendeeModel
{
    // be aware that deprecating properties means you still need to support both ways of creating attendees

    /**
     * @Property(deprecated=true, description="Property firstname is deprecated, use property name instead.")
     */
    //#[NotBlank(allowNull: true)]
    #[NotBlank]
    public string $firstname;

    /**
     * @Property(deprecated=true, description="Property lastname is deprecated, use property name instead.")
     */
    //#[NotBlank(allowNull: true)]
    #[NotBlank]
    public string $lastname;

    #[NotBlank(allowNull: true)]
    public string $name;

    #[NotBlank]
    #[Email]
    public string $email;
}
