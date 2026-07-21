
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Employee</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous"
    >
</head>

<body class="bg-body-tertiary">

    <main class="container py-5">

        <div class="row justify-content-center">

            <div class="col-12 col-md-10 col-lg-8 col-xl-7">

                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                    <!-- Header -->
                    <div class="card-header bg-primary text-white border-0 p-4">
                        <h1 class="h3 fw-bold mb-1">Create Employee</h1>

                        <p class="mb-0 text-white-50">
                            Enter the employee's personal and work information.
                        </p>
                    </div>

                    <!-- Form Body -->
                    <div class="card-body p-4 p-md-5">

                        <form action="{{ route('create.post') }}" method="post">

                            <!-- Laravel CSRF -->
                            @csrf

                            <div class="row g-4">

                                <!-- Name -->
                                <div class="col-12">
                                    <label for="name" class="form-label fw-semibold">
                                        Full Name
                                        <span class="text-danger">*</span>
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        id="name"
                                        name="name"
                                        placeholder="Enter employee full name"
                                        required
                                    >
                                </div>

                                <!-- Gender -->
                                <div class="col-12 col-md-6">
                                    <label for="gender" class="form-label fw-semibold">
                                        Gender
                                        <span class="text-danger">*</span>
                                    </label>

                                    <select
                                        class="form-select form-select-lg"
                                        id="gender"
                                        name="gender"
                                        required
                                    >
                                        <option value="" selected disabled>
                                            Select gender
                                        </option>

                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>

                                <!-- Position -->
                                <div class="col-12 col-md-6">
                                    <label for="position" class="form-label fw-semibold">
                                        Position
                                        <span class="text-danger">*</span>
                                    </label>

                                    <select
                                        class="form-select form-select-lg"
                                        id="position"
                                        name="position"
                                        required
                                    >
                                        <option value="" selected disabled>
                                            Select position
                                        </option>

                                        <option value="Developer">Developer</option>
                                        <option value="Designer">Designer</option>
                                        <option value="Accountant">Accountant</option>
                                        <option value="QA">QA</option>
                                    </select>
                                </div>

                                <!-- Email -->
                                <div class="col-12 col-md-6">
                                    <label for="email" class="form-label fw-semibold">
                                        Email Address
                                        <span class="text-danger">*</span>
                                    </label>

                                    <input
                                        type="email"
                                        class="form-control form-control-lg"
                                        id="email"
                                        name="email"
                                        placeholder="example@email.com"
                                        required
                                    >
                                </div>

                                <!-- Salary -->
                                <div class="col-12 col-md-6">
                                    <label for="salary" class="form-label fw-semibold">
                                        Salary
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text">$</span>

                                        <input
                                            type="number"
                                            class="form-control"
                                            id="salary"
                                            name="salary"
                                            placeholder="0.00"
                                            min="0"
                                            step="0.01"
                                            required
                                        >
                                    </div>
                                </div>

                                <!-- Address -->
                                <div class="col-12">
                                    <label for="address" class="form-label fw-semibold">
                                        Address
                                        <span class="text-danger">*</span>
                                    </label>

                                    <textarea
                                        class="form-control"
                                        id="address"
                                        name="address"
                                        rows="3"
                                        placeholder="Enter employee address"
                                        required
                                    ></textarea>
                                </div>

                                <!-- Agreement -->
                                <div class="col-12">
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            id="confirm"
                                            required
                                        >

                                        <label class="form-check-label text-secondary" for="confirm">
                                            I confirm that the employee information is correct.
                                        </label>
                                    </div>
                                </div>

                                <!-- Buttons -->
                                <div class="col-12">
                                    <div class="d-flex flex-column flex-sm-row gap-3">

                                        <button
                                            type="submit"
                                            class="btn btn-primary btn-lg flex-grow-1"
                                        >
                                            Create Employee
                                        </button>

                                        <button
                                            type="reset"
                                            class="btn btn-outline-secondary btn-lg"
                                        >
                                            Clear Form
                                        </button>

                                    </div>
                                </div>

                            </div>

                        </form>

                    </div>

                    <!-- Footer -->
                    <div class="card-footer bg-white border-top px-4 py-3">
                        <small class="text-secondary">
                            Fields marked with
                            <span class="text-danger">*</span>
                            are required.
                        </small>
                    </div>

                </div>

            </div>

        </div>

    </main>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"
    ></script>

</body>
</html>

