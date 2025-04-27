<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }

    // public function studentProfile() {
    //     return $this->hasOne(StudentProfile::class);
    // }

    // public function children() {
    //     return $this->belongsToMany(StudentProfile::class, 'parent_student', 'parent_id', 'student_id');
    // }

    // public function classrooms() {
    //     return $this->belongsToMany(Classroom::class, 'teacher_classroom', 'teacher_id', 'classroom_id');
    // }

    public function hasPermission(string $permission, $context = null): bool
    {
        // Lấy danh sách quyền từ các vai trò của người dùng
        $permissions = $this->roles()
            ->with('permissions:name') // chỉ lấy cột 'name' cho nhẹ
            ->get()
            ->pluck('permissions')
            ->flatten()
            ->pluck('name')
            ->unique()
            ->toArray();

        // Nếu không có quyền này, trả về false ngay
        if (!in_array($permission, $permissions)) {
            return false;
        }

        // Nếu không có context, quyền đã được cấp thì trả true
        if (is_null($context)) {
            return true;
        }

        // // Xử lý logic theo context cụ thể
        // return match ($permission) {
        //     'score.view.own'        => $this->id === $context?->id,
        //     'score.view.children'   => $this->children->contains($context?->id),
        //     'score.view.class'      => $this->classrooms->contains($context?->id),
        //     'score.edit.student'    => $this->classrooms->contains($context?->classroom_id),
        //     default                 => true,
        // };

        return false; // Chưa xử lý logic theo context
    }

    public function hasAnyPermission(array $permissions): bool
    {
        foreach ($permissions as $permission) {
            if ($this->hasPermission($permission)) {
                return true;
            }
        }

        return false;
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }
}
