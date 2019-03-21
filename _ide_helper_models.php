<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\PasswordReset
 *
 * @property string $email
 * @property string $token
 * @property string|null $created_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PasswordReset whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PasswordReset whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PasswordReset whereToken($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PasswordReset newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PasswordReset newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PasswordReset query()
 */
	class PasswordReset extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Vote
 *
 * @property int $id
 * @property int $user_id
 * @property int $option_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Option $option
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vote newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vote newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vote query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vote whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vote whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vote whereOptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vote whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Vote whereUserId($value)
 * @mixin \Eloquent
 */
	class Vote extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CallType
 *
 * @property int $id
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CallType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CallType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CallType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CallType whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CallType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CallType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CallType query()
 */
	class CallType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ClosingReason
 *
 * @property int $id
 * @property string $reason
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClosingReason whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClosingReason whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClosingReason whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClosingReason whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClosingReason newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClosingReason newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ClosingReason query()
 */
	class ClosingReason extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Option
 *
 * @property int $id
 * @property string $name
 * @property int $poll_id
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Vote[] $votes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Poll $poll
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Option newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Option newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Option query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Option whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Option whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Option whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Option wherePollId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Option whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Option whereVotes($value)
 * @mixin \Eloquent
 */
	class Option extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\EeeeModel
 *
 * @property int $id
 * @property string $eeee
 * @property int $model_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EeeeModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EeeeModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EeeeModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EeeeModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EeeeModel whereEeee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EeeeModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EeeeModel whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\EeeeModel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class EeeeModel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\Inani\Larapoll\Option[] $options
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Model
 *
 * @property int $id
 * @property int $manufacturer_id
 * @property string $model
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model query()
 */
	class Model extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Unit
 *
 * @property int $id
 * @property string $serial
 * @property int $manufacturer_id
 * @property int $model_id
 * @property int $customer_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereSerial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit query()
 */
	class Unit extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Rminstzlb
 *
 * @property int $id
 * @property int $rminst
 * @property int $zlb
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb whereRminst($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb whereZlb($value)
 * @mixin \Eloquent
 * @property int $calltype_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb whereCalltypeId($value)
 * @property string $zlb_created_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb whereZlbCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rminstzlb query()
 */
	class Rminstzlb extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Customer
 *
 * @property int $id
 * @property string $customer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer whereCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Customer query()
 */
	class Customer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\KvaLimit
 *
 * @property int $id
 * @property int $customer_id
 * @property int $model_id
 * @property float $max_price
 * @property string $remark
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit whereMaxPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\KvaLimit query()
 */
	class KvaLimit extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Poll
 *
 * @property int $id
 * @property string $question
 * @property int $maxCheck
 * @property int $isClosed
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Option[] $options
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Poll newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Poll newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Poll query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Poll whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Poll whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Poll whereIsClosed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Poll whereMaxCheck($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Poll whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Poll whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Poll extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RepairFile
 *
 * @property int $id
 * @property int $repair_id
 * @property string $file_name
 * @property string $file_ext
 * @property string $storage_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile whereFileExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile whereRepairId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile whereStoragePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairFile whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class RepairFile extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Manufacturer
 *
 * @property int $id
 * @property string $manufacturer
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer whereManufacturer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer query()
 */
	class Manufacturer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Spare
 *
 * @property int $id
 * @property int $sap_no
 * @property string $sap_desc
 * @property int $manufacturer_id
 * @property int $model_id
 * @property int $customer_id
 * @property string $manufacturer_part_no
 * @property string $manufacturer_part_desc
 * @property string $manufacturer_remarks
 * @property float $price_replace
 * @property float $price_stock
 * @property \Illuminate\Support\Carbon $price_replace_date
 * @property \Illuminate\Support\Carbon $price_stock_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereManufacturerPartDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereManufacturerPartNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereManufacturerRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare wherePriceReplace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare wherePriceReplaceDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare wherePriceStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare wherePriceStockDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereSapDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereSapNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Spare query()
 */
	class Spare extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SparesToRepair
 *
 * @property int $id
 * @property int $repair_id
 * @property int $spare_id
 * @property string $serial_old
 * @property string $serial_new
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair whereRepairId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair whereSerialNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair whereSerialOld($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair whereSpareId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Repair $repair
 * @property-read \App\Models\Spare $spare
 * @property int $type_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SparesToRepair query()
 */
	class SparesToRepair extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Overtime
 *
 * @property int $id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon $overtime_at
 * @property \Illuminate\Support\Carbon $started_at
 * @property \Illuminate\Support\Carbon $ended_at
 * @property int $overtime_minutes
 * @property string $reason
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Overtime newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Overtime newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Overtime query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Overtime whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Overtime whereEndedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Overtime whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Overtime whereOvertimeAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Overtime whereOvertimeMinutes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Overtime whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Overtime whereStartedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Overtime whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Overtime whereUserId($value)
 */
	class Overtime extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AppleEee
 *
 * @property int $id
 * @property int $spare_id
 * @property string $eee
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AppleEee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AppleEee whereEee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AppleEee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AppleEee whereSpareId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AppleEee whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AppleEee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AppleEee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AppleEee query()
 */
	class AppleEee extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class PasswordReset
 *
 * @property string $email
 * @property string $token
 * @property \Carbon\Carbon $created_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\PasswordReset newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\PasswordReset newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\PasswordReset query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\PasswordReset whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\PasswordReset whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\PasswordReset whereToken($value)
 */
	class PasswordReset extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Vote
 *
 * @property int $id
 * @property int $user_id
 * @property int $option_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \App\Models\Option $option
 * @property \App\Models\User $user
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Vote newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Vote newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Vote query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Vote whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Vote whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Vote whereOptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Vote whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Vote whereUserId($value)
 */
	class Vote extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class CallType
 *
 * @property int $id
 * @property string $type
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\CallType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\CallType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\CallType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\CallType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\CallType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\CallType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\CallType whereUpdatedAt($value)
 */
	class CallType extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class ClosingReason
 *
 * @property int $id
 * @property string $reason
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ClosingReason newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ClosingReason newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ClosingReason query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ClosingReason whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ClosingReason whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ClosingReason whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ClosingReason whereUpdatedAt($value)
 */
	class ClosingReason extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Option
 *
 * @property int $id
 * @property string $name
 * @property int $poll_id
 * @property int $votes
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \App\Models\Poll $poll
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Option newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Option newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Option query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Option whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Option whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Option whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Option wherePollId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Option whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Option whereVotes($value)
 */
	class Option extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class EeeeModel
 *
 * @property int $id
 * @property string $eeee
 * @property int $model_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\EeeeModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\EeeeModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\EeeeModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\EeeeModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\EeeeModel whereEeee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\EeeeModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\EeeeModel whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\EeeeModel whereUpdatedAt($value)
 */
	class EeeeModel extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Illuminate\Database\Eloquent\Collection $votes
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Model
 *
 * @property int $id
 * @property int $manufacturer_id
 * @property string $model
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Model newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Model newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Model query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Model whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Model whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Model whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Model whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Model whereUpdatedAt($value)
 */
	class Model extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Unit
 *
 * @property int $id
 * @property string $serial
 * @property int $manufacturer_id
 * @property int $model_id
 * @property int $customer_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Unit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Unit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Unit query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Unit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Unit whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Unit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Unit whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Unit whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Unit whereSerial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Unit whereUpdatedAt($value)
 */
	class Unit extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Rminstzlb
 *
 * @property int $id
 * @property int $rminst
 * @property int $zlb
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $calltype_id
 * @property \Carbon\Carbon $zlb_created_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rminstzlb newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rminstzlb newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rminstzlb query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rminstzlb whereCalltypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rminstzlb whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rminstzlb whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rminstzlb whereRminst($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rminstzlb whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rminstzlb whereZlb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rminstzlb whereZlbCreatedAt($value)
 */
	class Rminstzlb extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Customer
 *
 * @property int $id
 * @property string $customer
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Customer whereCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Customer whereUpdatedAt($value)
 */
	class Customer extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class KvaLimit
 *
 * @property int $id
 * @property int $customer_id
 * @property int $model_id
 * @property float $max_price
 * @property string $remark
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\KvaLimit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\KvaLimit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\KvaLimit query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\KvaLimit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\KvaLimit whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\KvaLimit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\KvaLimit whereMaxPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\KvaLimit whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\KvaLimit whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\KvaLimit whereUpdatedAt($value)
 */
	class KvaLimit extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Poll
 *
 * @property int $id
 * @property string $question
 * @property int $maxCheck
 * @property int $isClosed
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Illuminate\Database\Eloquent\Collection $options
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Poll newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Poll newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Poll query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Poll whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Poll whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Poll whereIsClosed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Poll whereMaxCheck($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Poll whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Poll whereUpdatedAt($value)
 */
	class Poll extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class RepairFile
 *
 * @property int $id
 * @property int $repair_id
 * @property string $file_name
 * @property string $file_ext
 * @property string $storage_path
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairFile query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairFile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairFile whereFileExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairFile whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairFile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairFile whereRepairId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairFile whereStoragePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairFile whereUpdatedAt($value)
 */
	class RepairFile extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Manufacturer
 *
 * @property int $id
 * @property string $manufacturer
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Manufacturer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Manufacturer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Manufacturer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Manufacturer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Manufacturer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Manufacturer whereManufacturer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Manufacturer whereUpdatedAt($value)
 */
	class Manufacturer extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Spare
 *
 * @property int $id
 * @property int $sap_no
 * @property string $sap_desc
 * @property int $manufacturer_id
 * @property int $model_id
 * @property int $customer_id
 * @property string $manufacturer_part_no
 * @property string $manufacturer_part_desc
 * @property string $manufacturer_remarks
 * @property float $price_replace
 * @property float $price_stock
 * @property \Carbon\Carbon $price_replace_date
 * @property \Carbon\Carbon $price_stock_date
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereManufacturerPartDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereManufacturerPartNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereManufacturerRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare wherePriceReplace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare wherePriceReplaceDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare wherePriceStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare wherePriceStockDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereSapDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereSapNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Spare whereUpdatedAt($value)
 */
	class Spare extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class SparesToRepair
 *
 * @property int $id
 * @property int $repair_id
 * @property int $spare_id
 * @property string $serial_old
 * @property string $serial_new
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $type_id
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\SparesToRepair newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\SparesToRepair newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\SparesToRepair query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\SparesToRepair whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\SparesToRepair whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\SparesToRepair whereRepairId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\SparesToRepair whereSerialNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\SparesToRepair whereSerialOld($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\SparesToRepair whereSpareId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\SparesToRepair whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\SparesToRepair whereUpdatedAt($value)
 */
	class SparesToRepair extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Overtime
 *
 * @property int $id
 * @property int $user_id
 * @property \Carbon\Carbon $overtime_at
 * @property \Carbon\Carbon $started_at
 * @property \Carbon\Carbon $ended_at
 * @property int $overtime_minutes
 * @property string $reason
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Overtime newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Overtime newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Overtime query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Overtime whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Overtime whereEndedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Overtime whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Overtime whereOvertimeAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Overtime whereOvertimeMinutes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Overtime whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Overtime whereStartedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Overtime whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Overtime whereUserId($value)
 */
	class Overtime extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class AppleEee
 *
 * @property int $id
 * @property int $spare_id
 * @property string $eee
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\AppleEee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\AppleEee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\AppleEee query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\AppleEee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\AppleEee whereEee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\AppleEee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\AppleEee whereSpareId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\AppleEee whereUpdatedAt($value)
 */
	class AppleEee extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Repair
 *
 * @property int $id
 * @property \Carbon\Carbon $started_at
 * @property int $rminstzlb_id
 * @property int $customer_id
 * @property int $manufacturer_id
 * @property int $model_id
 * @property int $repair_type_id
 * @property int $closing_reason_id
 * @property string $remarks
 * @property \Carbon\Carbon $closed_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $unit_id
 * @property string $g_no
 * @property int $order_no
 * @property int $user_id
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereClosedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereClosingReasonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereGNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereRepairTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereRminstzlbId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereStartedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereUnitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Repair whereUserId($value)
 */
	class Repair extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class RepairType
 *
 * @property int $id
 * @property string $type
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\RepairType whereUpdatedAt($value)
 */
	class RepairType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Repair
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $started_at
 * @property int $rminstzlb_id
 * @property int $customer_id
 * @property string $serial
 * @property int $manufacturer_id
 * @property int $model_id
 * @property int $repair_type_id
 * @property int $closing_reason_id
 * @property string $remarks
 * @property \Illuminate\Support\Carbon $closed_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereClosedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereClosingReasonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereRepairTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereRminstzlbId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereSerial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereStartedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $unit_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereUnitId($value)
 * @property-read \App\Models\Rminstzlb $rminst
 * @property string|null $g_no
 * @property int|null $order_no
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereGNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereOrderNo($value)
 * @property int $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Repair query()
 */
	class Repair extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RepairType
 *
 * @property int $id
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairType whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RepairType query()
 */
	class RepairType extends \Eloquent {}
}
