@extends('layouts.manage')

@section('content')
	<div class="flex-container">
		<div class="columns m-t-10">
			<div class="column">
				<h1 class="title">Edit User</h1>
			</div>
		</div>
		<hr class="m-t-0">
		<div class="columns">
			<div class="column">
				<form action="{{ route('users.update', $user->id) }}" method="POST">
					{{ method_field('PUT') }}
					{{ csrf_field() }}
					<div class="field">
						<label for="name" class="label">Name</label>
						<p class="control">
							<input type="text" value="{{ $user->name }}" class="input" name="name" id="name">
						</p>
					</div>
					<div class="field">
						<label for="email" class="label">Email</label>
						<p class="control">
							<input type="text" value="{{ $user->email }}" class="input" name="email" id="email">
						</p>
					</div>
					<div class="field">
						<label for="password" class="label">Password</label>
						<b-radio-group v-model="password_options">
							<div class="field m-b-10">
								<b-radio value="keep">Do Not Change Password</b-radio>
							</div>
							<div class="filed m-b-10">
								<b-radio value="auto">Auto-Generate New Password</b-radio>
							</div>
							<div class="filed m-b-10">
								<b-radio value="manual">Manually set New Password</b-radio>
								<p class="control">
									<input type="password" class="input m-t-10" name="password" id="password" v-if="password_options == 'manual'" placeholder="Manully give a password to this User">
								</p>
							</div>
						</b-radio-group>
					</div>
					<button class="button is-primary is-pulled-right">Edit User</button>
				</form>
			</div>
		</div>
	</div> <!-- end of .flex-container -->
@endsection

@section('scripts')
	<script>
		var app = new Vue({
			el: '#app',
			data: {
				password_options: 'keep'
			}
		})
	</script>
@endsection