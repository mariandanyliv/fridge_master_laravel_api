<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema (
 *     title="Booking request",
 *     type="object",
 *     description="create booking",
 * )
 */
class BookingModel extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = ['user_id', 'amount', 'code', 'amount_days'];

    /**
     * @OA\Property(
     *     title="user_id",
     *     description="ID user",
     *     format="int64",
     *     example=10,
     * )
     * @var int
     */
    public $user_id;

    /**
     * @OA\Property(
     *     title="amount",
     *     description="amount bookings",
     *     format="decimal",
     *     example=350.00
     * )
     * @var int
     */
    public $amount;

    /**
     * @OA\Property(
     *     title="code",
     *     description="code booking",
     *     format="string",
     *     example="gjfjgFGT89D2",
     * )
     * @var string
     */
    public $code;

    /**
     * @OA\Property(
     *     title="amount_days",
     *     description="integer booking",
     *     format="int64",
     *     example=12,
     * )
     * @var int
     */
    public $amount_days;

    /**
     * @OA\Property(
     *     title="size",
     *     description="size blocks",
     *     format="int64",
     *     example=5,
     * )
     * @var int
     */
    public $size;
}
