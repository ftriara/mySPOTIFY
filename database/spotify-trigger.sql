USE [SPOTIFY]

DROP TRIGGER IF EXISTS trg_song_duration;
DROP TRIGGER IF EXISTS trg_stream_duration;

CREATE TRIGGER trg_song_duration
ON [SONG]
AFTER INSERT, UPDATE AS
BEGIN
	UPDATE [SONG] SET [Duration_Hours] = FLOOR([Duration]/3600),
				      [Duration_Minutes] = FLOOR([Duration]/60) % 60,
					  [Duration_Seconds] = ([Duration] % 60)
END

CREATE TRIGGER trg_stream_duration
ON [STREAM]
AFTER INSERT, UPDATE AS
BEGIN
	UPDATE [STREAM] SET [Duration] = DATEDIFF(SECOND, StartedAt, FinishedAt)
END
